@extends('layout')
@section('content')
<h1 class="py-4">Change Password</h1>
<div class="container-fluid">
    <div class="form-group p-2">
    <input type="password" id="password_field" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group p-2">
      <input type="password" id="repeat_password_field" class="form-control" placeholder="Repeat Password" required>
    </div>
    <button id="login_button" onclick="changePassword()" class="btn font-weight-bold" >Change Password</button>
</div>
@endsection
