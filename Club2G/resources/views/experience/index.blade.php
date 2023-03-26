@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
 @foreach ($viewData["experience"] as $experience)
 <div class="col-md-4 col-lg-3 mb-2">
 <div class="card">
 <img src="{{ asset('/img/'.$experience["image"]) }}" class="card-img-top img-card">
 <div class="card-body text-center">
 <a href="{{ route('experience.show', ['id'=> $experience->getId()]) }}"
 class="btn bg-primary text-white">{{ $experience->getName() }}</a>
 </div>
 </div>
 </div>
 @endforeach
</div>
@endsection