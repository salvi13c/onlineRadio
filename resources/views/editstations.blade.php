@extends('layout')
@section('content')
<h1>Edit Station</h1>

<div class="container-fluid">
    <div id="user_login">
      <div class="form-group p-2">
        <input type="text" id="name_field" class="form-control" value="{{$name}}"  placeholder="Name" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="description_field" class="form-control" value="{{$description}}"  placeholder="Description" required>
      </div>
      <div class="form-group p-2">
        <input type="text" id="image_field" class="form-control" value="{{$image}}" placeholder="Image" required>
      </div>
      <div class="form-group p-2">
        Country: <select name="countries" id="countries_field">
          @foreach ($countriesList as $country)
          <option value="{{$country->id}}">{{$country->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group p-2">
        Genere: <select name="generes" id="generes_field">
          @foreach ($generesList as $genere)
          <option value="{{$genere->id}}">{{$genere->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group p-2">
        <input type="text" id="url_field" class="form-control" value="{{$url}}" placeholder="URL" required>
      </div>
      <button id="edit_station_button" class="btn font-weight-bold my-3" onclick="editStation({{$id}})" >Edit</button>
    </div>
  </div>
@endsection