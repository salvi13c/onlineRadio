@extends('layout')
@section('content')
<h1 class="py-4">Login</h1>
<div class="container-fluid">
  <div id="user_login">
    <div class="form-group p-2">
      <input type="text" id="email_field" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group p-2">
      <input type="password" id="password_field" class="form-control" placeholder="Password" required>
    </div>
    <button id="login_button" onclick="login()" class="btn font-weight-bold" >Login</button>
  </div>
</div>
@endsection
