@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
 <div class="card-header">
 Crea una Búsqueda del Tesoro
 </div>
 <div class="card-body">
 @if($errors->any())
 <ul class="alert alert-danger list-unstyled">
 @foreach($errors->all() as $error)
 <li>- {{ $error }}</li>
 @endforeach
 </ul>
 @endif

 <form method="POST" action="{{ route('admin.treasure.store') }}">
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
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Puntos:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="points" value="{{ old('points') }}" type="number" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de inicio:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="startsAt" value="{{ old('startsAt') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 <div class="col">
 <div class="mb-3 row">
 <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fecha de finalización:</label>
 <div class="col-lg-10 col-md-6 col-sm-12">
 <input name="endsAt" value="{{ old('endsAt') }}" type="text" class="form-control">
 </div>
 </div>
 </div>
 </div>
 <div class="mb-3">
 <label class="form-label">Descripción</label>
 <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
</div> 
<div class="card">
 <div class="card-header">
 Administra las búsquedas del tesoro
 </div>
 <div class="card-body">
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th scope="col">ID</th>
 <th scope="col">Name</th>
 <th scope="col">Edit</th>
 <th scope="col">Delete</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($viewData["treasures"] as $treasure)
 <tr>
 <td>{{ $treasure->getId() }}</td>
 <td>{{ $treasure->getName() }}</td>
 <td>
 <a class="btn btn-primary" href="{{route('admin.treasure.edit', ['id'=> $treasure->getId()])}}">
 <i class="bi-pencil"></i>
 </a>
 </td>
 <td>
 <form action="{{ route('admin.treasure.delete', $treasure->getId())}}" method="POST">
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
