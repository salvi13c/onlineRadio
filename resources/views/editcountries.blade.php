@extends('layout')
@section('content')
<h1>Edit Country</h1>
<div class="container-fluid">
    <div id="user_login">
      <div class="form-group p-2">
        <input type="text" id="name_field" class="form-control" value="{{$name}}" placeholder="Name" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="continent_field" class="form-control" value="{{$continent}}" placeholder="Continent" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="language_field" class="form-control" value="{{$language}}"  placeholder="Language" required>
      </div>
      <button id="edit_country_button" class="btn font-weight-bold" onclick="editCountry({{$id}})" >Edit</button>
    </div>
  </div>
@endsection