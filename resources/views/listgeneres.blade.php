@extends('layout')
@section('content')
<h1>Explore Generes:</h1>
<div class="genere-flex-box my-5">
  @foreach ($generesList as $genere)
  <div class="genere-flex-box-name" type="button"  onclick="window.open('/stations/bygenere/{{ $genere->name }}','_self')">{{ $genere->name }}</div>
  @endforeach
</div>
@endsection