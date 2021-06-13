@extends('layout')
@section('content')
<h1 class="my-3">Search Results</h1>
<table class="table search-table my-3">
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
        <td><h6>{{ $station->station_name }}</h6></td>
        <td>{{ $station->station_description}}</td>
        <td>{{ $station->genere_name}}</td>
        <td>{{ $station->country_name}}</td>
        <td><img src="{{ $station->station_image }}" alt="image" id="TableStationImage"></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
