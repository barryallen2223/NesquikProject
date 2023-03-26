@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
 <div class="card-header">
 Editar búsqueda del tesoro
 </div>
 <div class="card-body">
 @if($errors->any())
 <ul class="alert alert-danger list-unstyled">
 @foreach($errors->all() as $error)
 <li>- {{ $error }}</li>
 @endforeach
 </ul>
 @endif
 <form method="POST" action="{{ route('admin.treasure.update', ['id'=> $viewData['treasure']->getId()]) }}"
 enctype="multipart/form-data">
 @csrf
 @method('PUT')
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="name" value="{{ $viewData['treasure']->getName() }}" type="text"
class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Puntos:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="points" value="{{ $viewData['treasure']->getPoints() }}" type="number"
class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de inicio:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="startsAt" value="{{ $viewData['treasure']->getStartsAt() }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de finalización:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="endsAt" value="{{ $viewData['treasure']->getEndsAt() }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 &nbsp;
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Descripción</label>
 <textarea class="form-control" name="description"
 rows="3">{{ $viewData['treasure']->getDescription() }}</textarea>
 </div>
 <button type="submit" class="btn btn-primary">Editar</button>
 </form>
 </div>
</div>
@endsection
