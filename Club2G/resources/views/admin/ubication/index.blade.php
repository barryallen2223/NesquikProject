@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
 <div class="card-header">
 Crea una ubicación
 </div>
 <div class="card-body">
 @if($errors->any())
 <ul class="alert alert-danger list-unstyled">
 @foreach($errors->all() as $error)
 <li>- {{ $error }}</li>
 @endforeach
 </ul>
 @endif

 <form method="POST" action="{{ route('admin.ubication.store') }}">
 @csrf
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="name" value="{{ old('name') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Dirección:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="address" value="{{ old('address') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Latitud:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="latitud" value="{{ old('latitud') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Longitud:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="longitud" value="{{ old('longitud') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Detalles:</label>
 <textarea class="form-control" name="details" rows="3">{{ old('details') }}</textarea>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
</div> 
<div class="card">
 <div class="card-header">
 Administra las ubicaciones creadas
 </div>
 <div class="card-body">
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th scope="col">ID</th>
 <th scope="col">Nombre</th>
 <th scope="col">Editar</th>
 <th scope="col">Borrar</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($viewData["ubications"] as $ubication)
 <tr>
 <td>{{ $ubication->getId() }}</td>
 <td>{{ $ubication->getName() }}</td>
 <td>
 <a class="btn btn-primary" href="{{route('admin.ubication.edit', ['id'=> $ubication->getId()])}}">
 <i class="bi-pencil"></i>
 </a>
 </td>
 <td>
 <form action="{{ route('admin.ubication.delete', $ubication->getId())}}" method="POST">
 @csrf
 @method('DELETE')
 <button class="btn btn-danger">
 <i class="bi-trash"></i>
 </button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
</div>
@endsection
