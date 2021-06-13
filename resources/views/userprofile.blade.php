@extends('layout')
@section('content')
<div class="my-5">
<h1 class="my-3">Profile</h1>
Name: {{ $userProfile[0]->name }}<br>
Email: {{ $userProfile[0]->email }}<br>
User Level: {{ $userProfile[0]->user_level }}<br>
</div>

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
  <button id="delete_historial_button" class="btn font-weight-bold my-5" onclick="deleteHistorial()" >Delete Historial</button>
@endsection
