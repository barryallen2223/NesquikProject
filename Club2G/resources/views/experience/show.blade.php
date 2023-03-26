@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
 <div class="row g-0">
 <div class="col-md-4">
 
 </div>
 <div class="col-md-8">
 <div class="card-body">
 <h5 class="card-title">
 {{  $viewData["experience"]->getName()  }} (Puntos: {{ $viewData["experience"]->getPoints() }})
 </h5>
 <p class="card-text">{{  $viewData["experience"]->getDescription() }}</p>
 <p class="card-text"><small class="text-muted">Aceptar</small></p>
 <button class="btn btn-dark btn-custom">Haz clic aquí</button>
 <p class="card-text"><small class="text-muted">Volver a la lista</small></p>
 </div>
 </div>
 </div>
</div>
@endsection
