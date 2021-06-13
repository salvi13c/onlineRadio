@extends('layout')
@section('content')
<div class="row radio-player-box bg-light p-5">
    <div class="col-3 m-2">
        <img src="{{ $stationElement[0]->station_image }}" width="100%">
    </div>
    <div class="col-6 m-2">
      <h1> {{ $stationElement[0]->station_name }}</h1>
        <br>
        <audio autoplay controls='controls'> 
            <source src='{{ $stationElement[0]->station_url}}' type='audio/mpeg'/>
        </audio>
    </div>
    <div class="col-1 m-2">
      <button id="share_button" class="btn font-weight-bold my-3" data-toggle="modal" data-target="#shareModal">Share</button>
      <button type="button" id="details_button" class="btn font-weight-bold my-3" data-toggle="modal" data-target="#detailsModal"  >
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
          <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
        </svg>Details </button>
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
      
        <b>Description:</b> {{ $stationElement[0]->station_description }}
        <br>
        <b>Station Url:</b> {{$stationElement[0]->station_url}}
        <br>
        <b>Genere:</b>  {{$stationElement[0]->station_genere}}
        <br>
        <b>Country:</b> {{$stationElement[0]->station_country}}
        <br> 
        <b>Continent:</b> {{$stationElement[0]->station_continent}}
        <br> 
        <b>Language:</b> {{$stationElement[0]->station_language}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        <a href="https://twitter.com/intent/tweet?text=Hello%20world" target="_blank">
          <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
      </a>
      <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
      <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
  </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection