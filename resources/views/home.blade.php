@extends('layouts.app')

@section('page_title')Laravel Comics @endsection

@section('content')

<div class="container pt-5 pb-5">
    <div class="row g-4">
      @foreach($comics as $singleCard)
      <div class="col-2">
        <img src="{{$singleCard['thumb']}}">
        <h5>{{$singleCard['series']}}</h5>
      </div>
      @endforeach
    </div>
  </div>
  
@endsection
