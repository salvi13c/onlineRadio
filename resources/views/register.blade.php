@extends('layout')
@section('content')
<div id="contact" class="container-fluid">
    <div class="content">
        <h1>Register</h1>
        <div id="user_register">
                <div class="col-12 p-4">
                    <input type="text" id="name_field" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-12 p-4">
                    <input type="text" id="email_field" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-12 p-4">
                    <input type="password" id="password_field" class="form-control" placeholder="Password" required>
                </div>
                <div class="col-12 p-4">
                    <input type="password" id="repeat_password_field" class="form-control" placeholder="Repeat Password" required>
                </div>
            <div class="p-4 my-4">
                <button id="register_button" onclick="register()" class="btn font-weight-bold">Register</button>
            </div>
        </div>
    </div>
</div>
@endsection
