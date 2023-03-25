@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
 @foreach ($viewData["treasures"] as $treasure)
 <div class="col-md-4 col-lg-3 mb-2">
 <div class="card">
 <img src="{{ asset('/img/'.$treasure["image"]) }}" class="card-img-top img-card">
 <div class="card-body text-center">
 <a href="{{ route('treasure.show', ['id'=> $treasure->getId()]) }}"
 class="btn bg-primary text-white">{{ $treasure->getName() }}</a>
 </div>
 </div>
 </div>
 @endforeach
</div>
@endsection