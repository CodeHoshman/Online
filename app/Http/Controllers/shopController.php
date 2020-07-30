<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\post;
use App\shopper;
use App\contact;
use App\card;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class shopController extends Controller
{
    public function get_user_id(){
        return Auth::id();
    }
    public function index(){
        $guest=Cookie::has('guest')? Cookie::get('guest'):Cookie::queue("guest",rand().rand(),5353);
        $product=post::all();
        return view('/shopping',['products'=>$product,'guest'=>$guest,'userId'=>$this->get_user_id()]);
    }
    public function viewShopper(){
     $shoppers=shopper::all();
     return view('/shopper.shopper',['shoppers'=>$shoppers,"guest"=>Cookie::get('guest')]);

    }
   
    public function view($id){
        $products=post::where('userid',$id)->orderBy('title','ASC')->get();
        return view('/shopper.profile',['products'=>$products]);
   
       }
       public function getDetails($userid,$id){
        $product=post::findOrFail($id);
        $shopper=shopper::findOrFail($userid);
        return view('/shopper.details',['product'=>$product,'shopper'=>$shopper]);

       }
       public function update(){
         $oneImage=post::findOrFail(18);
         $oneImage->title="GuGuil";
         $oneImage->price=100.000;
         $oneImage->save();
         if(isset($oneImage)){
             return true;
         }else{
             return false;
         }
       }
       public function delete($id){
       $getPost=post::findOrFail($id);        
       $image_path = \public_path()."/assets/upload/".$getPost->image;
       if(File::exists($image_path)) {
        $k=$getPost::where(['userid' =>$this->get_user_id(),'id' =>$id])->delete();
        if($k === 1 || $k === true){
            File::delete($image_path);
            return redirect('/home');
        }
       }else{
           return "404 Not Found";
       }

       }
     public function saveContact(){
         $contact=new contact();
         $contact->title=htmlspecialchars(\request('title'));
         $contact->Description=\request('desc');
         if(strlen($contact->Description)>20){
         $k=$contact->save();
         if($k === 1 || $k === true){
             return redirect('/')->with('success',"Thanks For Report");
         }
        }else{
            return redirect('/')->with('fail',"Please make Sure");
            
        }
     }
     public function order(){
         $guest=Cookie::get('guest');
         $size=\request('sizes');
         $post_id=\request('post_id');
         if(empty($guest) || empty($post_id) || empty($size)){
            return redirect('/')->with('fail_order',"Sorry Please Make Sure");

         }else{
             $newCard=new card();
             $newCard->guest_id=$guest;
             $newCard->sizes=$size;
             $newCard->post_id=$post_id;
            $success= $newCard->save();
            if($success === 1 || $success === true){
                return redirect('/')->with('success_order',"success ordered");
            }
         }
     }
     public function card(){
         return view('/card');
     }

}
