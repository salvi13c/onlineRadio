@extends('layout')
@section('content')
<h1 class="my-3">{{$genere}} Songs</h1>
<div id="table-box">
<table class="table top-chart-table my-3">
    <thead>
      <tr>
        <th><h5>Song</h5></th>
        <th><h5>Description</h5></th>
        <th><h5>Genere</h5></th>
        <th><h5>Country</h5></th>
        <th><h5>Image</h5></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stations as $station)
      <tr onclick="window.open('/detailsstation/{{ $station->station_id }}','_self')">
        <td><h3>{{ $station->station_name }}</h3></td>
        <td><b>{{ $station->station_description}}</b></td>
        <td><b>{{ $station->genere_name}}</b></td>
        <td><b>{{ $station->country_name}}</b></td>
        <td><img src="{{ $station->station_image }}" alt="image" id="TableStationImage"></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
