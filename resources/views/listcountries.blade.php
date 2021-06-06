@extends('layout')
@section('content')
<h1>Explore By Countries</h1>
<div class="country-flex-box my-5">
  @foreach ($countriesList as $country)
  <div class="country-flex-box-name" type="button"  onclick="window.open('/stations/bycountry/{{ $country->name }}','_self')">{{ $country->name }}</div>
  @endforeach
</div>
@endsection