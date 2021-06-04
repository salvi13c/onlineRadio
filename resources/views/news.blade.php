@extends('layout')
@section('content')
<h1> Hot news</h1>
<div class="news-flex-box my-5">
@foreach ($newslist as $article)
<div class="news-flex-box-article">
    <h4><a href="{{$article->link}}" target="_blank">{{$article->title}}</a></h4>
    <!--<br><img src="{{$article->guid}}">--><br>{{$article->description}}<br>
    <div class="time"><i>{{$article->date}}</i></div>
</div>
@endforeach
</div>
@endsection