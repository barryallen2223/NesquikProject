@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
 <div class="card-header">
 Editar ubicación
 </div>
 <div class="card-body">
 @if($errors->any())
 <ul class="alert alert-danger list-unstyled">
 @foreach($errors->all() as $error)
 <li>- {{ $error }}</li>
 @endforeach
 </ul>
 @endif
 <form method="POST" action="{{ route('admin.ubication.update', ['id'=> $viewData['ubication']->getId()]) }}"
 enctype="multipart/form-data">
 @csrf
 @method('PUT')
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="name" value="{{ $viewData['ubication']->getName() }}" type="text"
class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Dirección:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="address" value="{{ $viewData['ubication']->getAddress() }}" type="text"
class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Latitud:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="latitud" value="{{ $viewData['ubication']->getLatitud() }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Longitud:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="longitud" value="{{ $viewData['ubication']->getLongitud() }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 &nbsp;
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Detalles:</label>
 <textarea class="form-control" name="details"
 rows="3">{{ $viewData['ubication']->getDetails() }}</textarea>
 </div>
 <button type="submit" class="btn btn-primary">Editar</button>
 </form>
 </div>
</div>
@endsection
