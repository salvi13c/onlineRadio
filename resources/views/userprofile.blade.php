@extends('layout')
@section('content')
<div class="my-5">
<h1 class="my-3">Profile</h1>
<b>Name:</b> {{ $userProfile[0]->name }}<br>
<b>Email:</b> {{ $userProfile[0]->email }}<br>
<b>User Level:</b> {{ $userProfile[0]->user_level }}<br>
</div>
<a class="btn login-btn btn-primary my-1" id="change_password_button" href="/changepassword">Change Password</a>
<h4 class="my-3">Latest listened songs</h4>
<table class="table historial-table my-3">
    <thead id="tableHeadColor">
      <tr>
        <th><h5>Image</h5></th>
        <th><h5>Song</h5></th>
        <th><h5>Date</h5></th>
        <th><h5>Genere</h5></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($historial as $entry)
      <tr>
        <td><img src="{{ $entry->station_image }}" alt="image" id="TableStationImageHistorialProfile"></td>
        <td><b>{{ $entry->station_name}}</b></td>
        <td>{{ $entry->station_date}}</td>
        <td>{{ $entry->genere_name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn login-btn btn-primary my-5" id="show_historial_button" href="/historial">Show Historial</a>
@endsection
