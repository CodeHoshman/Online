@extends('layout.layout')
@section('content')
<div class="row  justify-content-center text-center m-3">
    @foreach ($products as $product)
<div class="card m-2 p-2 radius-20" style="width: 18rem;">
    <img src="/assets/upload/{{$product->image}}" class="card-img-top w-50 m-auto img-fluid" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$product->title}}</h5>
    <h5 class="card-title">{{$product->price}}</h5>
    <a href="{{$product->userid}}/{{$product->id}}" class="btn bg-gradient-info w-100 border-0 text-white">View More</a><br> 
    
  </div>
  </div>
  @endforeach
</div>
@endsection

