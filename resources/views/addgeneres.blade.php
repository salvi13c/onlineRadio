@extends('layout')
@section('content')
<h1>Add Genere</h1>
<div class="container-fluid">
    <div id="user_login">
      <div class="form-group p-2">
        <input type="text" id="name_field" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="description_field" class="form-control" placeholder="Description" required>
      </div>
      <button id="add_genere_button" class="btn font-weight-bold" onclick="addGenere()" >Add</button>
    </div>
  </div>
@endsection