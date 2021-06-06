@extends('layout')
@section('content')
<h1 class="my-3">Profile</h1>
Name: {{ $userProfile[0]->name }}<br>
Email: {{ $userProfile[0]->email }}<br>
User Level: {{ $userProfile[0]->user_level }}<br>
@endsection
