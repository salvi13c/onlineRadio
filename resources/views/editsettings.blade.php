@extends('layout')
@section('content')
<h1>Edit Settings</h1>
<div class="container-fluid">
    <div id="user_login">
      <div class="form-group p-2">
        <input type="text" id="value_field" class="form-control" value="{{$value}}" placeholder="Value" required>
      </div>
      <button id="edit_genere_button" class="btn font-weight-bold" onclick="editSettings({{$id}})" >Edit</button>
    </div>
  </div>
@endsection