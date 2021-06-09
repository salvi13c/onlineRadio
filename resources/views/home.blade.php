@extends('layout')
@section('content')
<div class="containter">
	<div class="jumbotron bg-white welcome">
		<div class="text-center">
			<h1 id="mainpagetitle" class="p-4">Welcome to music radio player</h1>
		</div>
		<form action="/action_page.php">
			<div class="form-row">
				<div class="form-group col-12">
					<input type="text" class="form-control p-4" id="searchstations"
					placeholder="SEARCH STATIONS" name="Search Stations"><br>
					<table class="table table-bordered table-hover">
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</form> 
	</div>
</div> 

<div class="containter">
	<h3>Featured Stations</h3>
	<div class="row flex-row flex-nowrap popularstations">
		@foreach ($popularStationsList as $station)
		<div class="col-3" type="button" id="stationElement" onclick="window.open('/detailsstation/{{ $station->id }}','_self')">
			<div class="card custom-card" id="stationCard">
				<img class="card-img-top" src="{{ $station->image }}" alt="Radio 1">
				<div class="card-body">
					<span class="card-text p-1"><h4>{{ $station->name }}</h4>
						@if (session()->has('userUidd'))
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
							<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
						</svg>
						@endif
					</span>
				</div>
			</div>
		</div>
		
		@endforeach
	</div>
</div>
<script type="text/javascript">
	$('#searchstations').on('keyup',function(){
		$value=$(this).val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('search')}}',
			data:{'search':$value},
			success:function(data){
				$('tbody').html(data);
			}
		});
	})
</script>
<script type="text/javascript">
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
