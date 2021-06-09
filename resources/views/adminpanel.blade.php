@extends('layout')
@section('content')
<h1>Administration Panel</h1>
<div class="container my-4">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item">
            <a class="nav-link active" href="#crud-stations" data-toggle="tab">CRUD Stations</a></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#crud-generes" data-toggle="tab">CRUD Generes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#crud-countries" data-toggle="tab">CRUD Countries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#crud-top-charts" data-toggle="tab">CRUD Top Charts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#main-settings" data-toggle="tab">Settings</a>
        </li>
    </ul>
    <div class="row">
        <div class="container">
            <div class="tab-content my-tab">
                <div class="tab-pane active" id="crud-stations">
                    <br>
                    <h2>Stations</h2>
                    <div class="crud-action-buttons">
                        <a class="btn login-btn btn-primary crud-add-action-buttons" id="login_button_navbar" href="/adminpanel/crud/add/station"  class="btn btn-primary p-4">+</a>
                    </div>
                    <table class="table settings-table">
                        <thead>
                            <tr>
                                <th><h5>Id</h5></th>
                                <th><h5>Name</h5></th>
                                <th><h5>Description</h5></th>
                                <th><h5>Image</h5></th>
                                <th><h5>Genere</h5></th>
                                <th><h5>Country</h5></th>
                                <th><h5>Url</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stationsList as $station)
                            <tr>
                                <td><b>{{ $station->id }}<b></td>
                                    <td>{{ $station->name }}</td>
                                    <td>{{ $station->description }}</td>
                                    <td><img src="{{$station->image}}" alt="image" width="50" height="50"></td>
                                    <td>{{ $station->genere_name }}</td>
                                    <td>{{ $station->country_name }}</td>
                                    <td>{{ $station->url }}</td>
                                    <td><a class="btn login-btn btn-primary crud-edit-action-buttons" id="login_button_navbar"  
                                        href="/adminpanel/crud/edit/station/{{ base64_encode($station->name) }}
                                        /{{ base64_encode($station->description) }}/{{ base64_encode($station->image) }}
                                        /{{ base64_encode($station->country_name )}}/{{ base64_encode($station->genere_name) }}
                                        /{{ base64_encode($station->url) }}/{{ base64_encode($station->id)}}" class="btn btn-primary p-4">Edit</a></td>
                                    <td><a class="btn login-btn btn-primary crud-delete-action-buttons" id="login_button_navbar" 
                                        onclick="deleteStation({{ $station->id }})"  class="btn btn-primary p-4">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="crud-generes">
                        <br>
                        <h2>Generes</h2>
                        <div class="crud-action-buttons">
                            <a class="btn login-btn btn-primary crud-add-action-buttons" id="login_button_navbar" href="/adminpanel/crud/add/genere"  class="btn btn-primary p-4">+</a>
                        </div>
                        <table class="table settings-table">
                            <thead>
                                <tr>
                                    <th><h5>Id</h5></th>
                                    <th><h5>Name</h5></th>
                                    <th><h5>Description</h5></th>
                                </thead>
                                <tbody>
                                    @foreach ($generesList as $genere)
                                    <tr>
                                        <td><b>{{ $genere->id }}<b></td>
                                            <td>{{ $genere->name }}</td>
                                            <td>{{ $genere->description }}</td>
                                            <td><a class="btn login-btn btn-primary crud-edit-action-buttons" id="login_button_navbar" href="/adminpanel/crud/edit/genere/{{ base64_encode($genere->name) }}/{{ base64_encode($genere->description)}}/{{ base64_encode($genere->id)}}"  class="btn btn-primary p-4">Edit</a></td>
                                            <td><a class="btn login-btn btn-primary crud-delete-action-buttons" id="login_button_navbar" onclick="deleteGenere({{ $genere->id }})"  class="btn btn-primary p-4">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="crud-countries">
                                <br>
                                <h2>Countries</h2>
                                <div class="crud-action-buttons">
                                    <a class="btn login-btn btn-primary crud-add-action-buttons" id="login_button_navbar" href="/adminpanel/crud/add/country"  class="btn btn-primary p-4">+</a>
                                </div>
                                <table class="table settings-table">
                                    <thead>
                                        <tr>
                                            <th><h5>Id</h5></th>
                                            <th><h5>Name</h5></th>
                                            <th><h5>Continent</h5></th>
                                            <th><h5>Language</h5></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($countriesList as $country)
                                        <tr>
                                            <td><b>{{ $country->id }}<b></td>
                                                <td>{{ $country->name }}</td>
                                                <td>{{ $country->continent }}</td>
                                                <td>{{ $country->language }}</td>
                                                <td><a class="btn login-btn btn-primary crud-edit-action-buttons" id="login_button_navbar" href="/adminpanel/crud/edit/country/{{ base64_encode($country->name) }}/{{ base64_encode($country->continent) }}/{{ base64_encode($country->language)}}/{{ base64_encode($country->id)}}"  class="btn btn-primary p-4">Edit</a></td>
                                                <td><a class="btn login-btn btn-primary crud-delete-action-buttons" id="login_button_navbar" onclick="deleteCountry({{ $country->id }})"   class="btn btn-primary p-4">Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="crud-top-charts">
                                    <br>
                                    <h2>Top Charts</h2>
                                    <div class="crud-action-buttons">
                                        <a class="btn login-btn btn-primary crud-add-action-buttons" id="login_button_navbar"  class="btn btn-primary p-4">+</a>
                                    </div>
                                    <table class="table settings-table">
                                        <thead>
                                            <tr>
                                                <th><h5>Position</h5></th>
                                                <th><h5>Song</h5></th>
                                                <th><h5>Artist</h5></th>
                                                <th><h5>Genere</h5></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($topChartsList as $song)
                                            <tr>
                                                <td><b>{{ $song->id }}<b></td>
                                                    <td>{{ $song->song }}</td>
                                                    <td>{{ $song->artist }}</td>
                                                    <td>Proin eu eleifend nibh</td>
                                                    <td><a class="btn login-btn btn-primary crud-edit-action-buttons"  class="btn btn-primary p-4">Edit</a></td>
                                                    <td><a class="btn login-btn btn-primary crud-delete-action-buttons" id="login_button_navbar"  class="btn btn-primary p-4">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="main-settings">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    @endsection