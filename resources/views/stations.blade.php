@extends('layout')
@section('content')
<h1>Popular stations</h1>
<div class="row flex-row flex-nowrap popularstations">
  @foreach ($popularStationsList as $station)
  <div class="col-3" type="button" id="stationElement" onclick="window.open('/detailsstation/{{ $station->id }}','_self')">
    <div class="card custom-card" id="stationCard">
      <img class="card-img-top" src="{{ $station->image }}" alt="Radio 1">
      <div class="card-body">
        <p class="card-text"><h4>{{ $station->name }}</h4></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
<h1>Pop Stations</h1>
<div class="row flex-row flex-nowrap popularstations">
  @foreach ($popStationsList as $station)
  <div class="col-3" type="button" id="stationElement" onclick="window.open('/detailsstation/{{ $station->id }}','_self')">
    <div class="card custom-card" id="stationCard">
      <img class="card-img-top" src="{{ $station->image }}" alt="Radio 1">
      <div class="card-body">
        <p class="card-text"><h4>{{ $station->name }}</h4></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
<h1>News Stations</h1>
<div class="row flex-row flex-nowrap popularstations">
  @foreach ($newsStationsList as $station)
  <div class="col-3"  type="button" id="stationElement" onclick="window.open('/detailsstation/{{ $station->id }}','_self')">
    <div class="card custom-card" id="stationCard">
      <img class="card-img-top" src="{{ $station->image }}" alt="Radio 1">
      <div class="card-body">
        <p class="card-text"><h4>{{ $station->name }}</h4></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
<h1>Explore Generes:</h1>
<div class="genere-flex-box my-5">
  @foreach ($generesList as $genere)
  <div class="genere-flex-box-name" type="button"  onclick="window.open('/stations/bygenere/{{ $genere->name }}','_self')">{{ $genere->name }}</div>
  @endforeach
  <div class="genere-flex-box-name" type="button" onclick="window.open('/list/generes','_self')">All Generes</div>
</div>
<h1>Explore By Countries</h1>
<div class="country-flex-box my-5">
  @foreach ($countriesList as $country)
  <div class="country-flex-box-name" type="button"  onclick="window.open('/stations/bycountry/{{ $country->name }}','_self')">{{ $country->name }}</div>
  @endforeach
  <div class="country-flex-box-more" type="button" onclick="window.open('/list/countries','_self')">All Conuntries</div>
</div>


@endsection
