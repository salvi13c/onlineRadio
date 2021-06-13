@extends('layout')
@section('content')
<h1 class="my-3">Top Charts</h1>
<table class="table top-chart-table my-3">
    <thead>
      <tr id="tableHeadColor">
        <th><h5>Pos</h5></th>
        <th><h5>Title</h5></th>
        <th><h5>Artist</h5></th>
        <th><h5>Genere</h5></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($topchartlist as $song)
      <tr>
        <td><b id="positionTopChart">{{ $song->position }}<b></td>
        <td><b>{{ $song->title }}<b></td>
        <td>{{ $song->artist }}</td>
        <td>{{ $song->category }}</td>
        <td><a href="{{$song->link}}" style="text-decoration: none">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="32" fill="black" class="bi bi-play-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
          </svg>
      </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
