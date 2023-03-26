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
 {{  $viewData["treasure"]->getName()  }} (Puntos: {{ $viewData["treasure"]->getPoints() }})
 </h5>
 <p class="card-text">{{  $viewData["treasure"]->getDescription() }}</p>
 <p class="card-text">Fecha de inicio: {{  $viewData["treasure"]->getStartsAt() }}</p>
 <p class="card-text">Fecha de finalización: {{  $viewData["treasure"]->getEndsAt() }}</p>
 <p class="card-text"><small class="text-muted">Aceptar</small></p>
 <p class="card-text"><small class="text-muted">Volver a la lista</small></p>
 </div>
 </div>
 </div>
</div>
@endsection
