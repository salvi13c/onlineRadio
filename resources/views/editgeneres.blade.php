@extends('layout')
@section('content')
<h1>Edit Genere</h1>
<div class="container-fluid">
      <div class="form-group p-2">
       <label for="name"><b>Name</b></label>
        <input type="text" id="name_field" class="form-control" value="{{$name}}" placeholder="Name" required>
      </div>
      <div class="form-group p-2">
       <label for="description"><b>Description</b></label>
        <input type="text" id="description_field" class="form-control" value="{{$description}}" placeholder="Description" required>
      </div>
      <button id="edit_genere_button" class="btn font-weight-bold" onclick="editGenere({{$id}})" >Edit</button>
  </div>
@endsection