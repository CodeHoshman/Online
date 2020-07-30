@extends('layout.layout')

@section('content')
<div class="jumbotron jumbotron-fluid bg-white p-3  " style="border-radius: 10px">
    <div class="container text-center">
        <img src="/assets/upload/{{$product->image}}" class="card-img-top w-25 m-auto img-fluid shadow" alt="...">
        <p class="mt-5">Product Code:{{$product->id}}</p>
        <p>Product Price :{{$product->price}}</p>
        <p class="bg-gradient-lighter p-3">
            <b>Product Details</b>
            <br>
            {{$product->details}}<br>
            <form action="/order" method="POST">
                @csrf
            <div class="row justify-content-center">
                @foreach ($product->sizes as $size)
                
                    <div class="form-group form-check m-2 p-3 ">
                        <input type="checkbox" class="form-check-input" name="sizes[]" value="{{$size}}"
                            id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{$size}}</label>
                    </div>
                    @endforeach
                <input type="hidden" value="{{$product->id}}" name="post_id">
            </div>
        </p>
        <button class="btn bg-gradient-success w-100 border-0 text-white" href="#" role="button">Add To card</button>
    </div>
    </form>
</div>

@endsection
