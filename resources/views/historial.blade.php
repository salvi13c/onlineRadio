@extends('layout')
@section('content')
<h1 class="my-3">Historial</h1>
<table class="table historial-table my-3">
    <thead>
      <tr id="tableHeadColor">
        <th><h5>Image</h5></th>
        <th><h5>Song</h5></th>
        <th><h5>Date</h5></th>
        <th><h5>Genere</h5></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($historial as $entry)
      <tr>
        <td><img src="{{ $entry->station_image }}" alt="image" id="TableStationImage"></td>
        <td><b>{{ $entry->station_name}}</b></td>
        <td>{{ $entry->station_date}}</td>
        <td>{{ $entry->genere_name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <button id="delete_historial_button" class="btn font-weight-bold my-5" onclick="deleteHistorial()" >Delete Historial</button>


@endsection
