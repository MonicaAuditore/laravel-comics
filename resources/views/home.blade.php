@extends('layouts.app')

@section('page_title')Laravel Comics @endsection

@section('content')

<div class="all-cards">
<div class="container pt-5 pb-5">
    <div class="row g-4">
      @foreach($comics as $singleCard)
      <div class="col-2 ">
        <img src="{{$singleCard['thumb']}}">
        <h6 class="text-white testoCard">{{$singleCard['series']}}</h6>
      </div>
      @endforeach
    </div>
  </div>


  <div class="button-card text-center pt-3 pb-3">
    <button type="button" class="btn btn-primary btn-lg">LOAD MORE</button>

  </div>
  </div>
@endsection
