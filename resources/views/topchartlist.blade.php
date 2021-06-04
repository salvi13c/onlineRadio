@extends('layout')
@section('content')
<h1 class="my-3">Top Charts</h1>
<table class="table top-chart-table my-3">
    <thead>
      <tr>
        <th><h5>Position</h5></th>
        <th><h5>Song</h5></th>
        <th><h5>Artist</h5></th>
        <th><h5>Genere</h5></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($topchartlist as $song)
      <tr>
        <td><b>{{ $song->id }}<b></td>
        <td>{{ $song->song }}</td>
        <td>{{ $song->artist }}</td>
        <td>Proin eu eleifend nibh</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
