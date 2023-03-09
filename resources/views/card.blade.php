@extends('layouts.app')

@section('page_title')Laravel Comics @endsection

@section('content')

  <div class="container">
    <div class="row">
      @foreach($comics as $singleCard)
      <div class="col-4">
        {{$singleCard['title']}}
      </div>
      @endforeach
    </div>
  </div>
  
@endsection