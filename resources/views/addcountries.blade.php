@extends('layout')
@section('content')
<h1>Add Country</h1>
<div class="container-fluid">
    <div id="user_login">
      <div class="form-group p-2">
        <input type="text" id="name_field" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="continent_field" class="form-control" placeholder="Continent" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="language_field" class="form-control" placeholder="Language" required>
      </div>
      <button id="add_country_button" class="btn font-weight-bold" onclick="addCountry()" >Add</button>
    </div>
  </div>
@endsection