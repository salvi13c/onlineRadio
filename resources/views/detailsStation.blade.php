@extends('layout')
@section('content')
<div class="row radio-player-box bg-light p-5">
    <div class="col-3 m-2">
        <img src="{{ $station[0]->station_image }}" width="100%">
    </div>
    <div class="col-6 m-2">
      <h1> {{ $station[0]->station_name }}</h1>
        <div id="detailsStationdescription">
            <!--<b>Genere: </b>{{ $station[0]->genere_name}}-->
        </div>
        <br>
        <audio autoplay controls='controls'> 
            <source src='{{ $station[0]->station_url}}' type='audio/mpeg'/>
        </audio>
    </div>
    <div class="col-1 m-2">
      <button id="share_button" class="btn font-weight-bold my-3" data-toggle="modal" data-target="#shareModal">Share</button>
      <button type="button" id="favourite_button" class="btn font-weight-bold my-3"  >
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
        </svg>Favourite </button>
    </div>
</div>
<hr class="mt-3 mb-3 separation-line"/>
<div class="my-6 recommened-stations-box">
    <h1>Recommened Stations for you</h1>
      <div class="row flex-row flex-nowrap popularstations">
        @foreach ($recomendedStations as $station)
        <div type="button" class="col-3" id="stationElement" onclick="window.open('/detailsstation/{{ $station->id }}','_self')">
          <div class="card custom-card" id="stationCard">
            <img class="card-img-top" src="{{ $station->image }}" alt="Radio 1">
            <div class="card-body">
              <p class="card-text"><h4>{{ $station->name }}</h4></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>

<div class="modal" id="detailsModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Description
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal" id="shareModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Share</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Social media buttons
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


@endsection