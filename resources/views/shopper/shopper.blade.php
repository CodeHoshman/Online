@extends('layout.layout')
@section('content')
<div class="row  justify-content-center text-center m-3">
    @foreach ($shoppers as $shoppers)
<div class="card m-2 p-2 radius-20" style="width: 18rem;">
    <img src="assets/shopper/men.JPG" class="card-img-top w-100 radius-20 m-auto img-fluid" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$shoppers->name}}</h5>
    <h5 class="card-title">{{$shoppers->email}}</h5>
    <a href="/shopper/{{$shoppers->id}}" class="btn bg-gradient-info w-100 border-0 text-white">SEE Profile</a>

    </div>
  </div>
  @endforeach
</div>
@endsection

