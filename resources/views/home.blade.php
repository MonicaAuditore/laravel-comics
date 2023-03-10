@extends('layouts.app')

@section('page_title')Laravel Comics @endsection

@section('content')

<div class="all-cards">
<div class="container pt-5 pb-5">
    <div class="row g-4">
      @foreach($comics as $singleCard)
      <div class="col-lg-2 col-md-3 col-sm-3">
        <img style="width: 100%;" src="{{$singleCard['thumb']}}">
        <h6 style="font-size: 14px;" class="text-white testoCard pt-3">{{$singleCard['series']}}</h6>
      </div>
      @endforeach
    </div>
  </div>


  <div class="button-card text-center pt-3 pb-4">
    <button type="button" class="btn btn-primary btn-lg">LOAD MORE</button>

  </div>
  </div>
@endsection
