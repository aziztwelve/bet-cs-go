@extends('layouts.main_page')

@section('content')
<br>
<div class="container">
 
	<div>
		<nav class="navbar navbar-light bg-light justify-content-between" style="float: right;margin-bottom: 30px;">
			{!! Form::open(['url'=>route('getUpcomingSearch'), 'class'=>'form-inline', 'method'=>'POST']) !!}
				<input class="form-control mr-sm-2" type="text" name="search" placeholder="Турниры, команды" aria-label="Search">
				{!! Form::button('Поиск', ['class'=>'btn btn-outline-success my-2 my-sm-0', 'type'=>'submit']) !!}
			</form>
		</nav>
		<p> Все предстоящие матчи</p>
	</div>
	<br><br><br>
	
	<div class="container">
		@foreach($upcoming as $match)
					<div class="row" style="background-color: white">
						<div class="col" >
							@if($match->tourney ==null)
								<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ URL::to('/images/noimage/nologo.png') }}" alt="Card image cap">
							@elseif($match->tourney->logo ==null)
							<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ URL::to('/images/noimage/nologo.png') }}" alt="Card image cap">
							@else
								<a href="{{route('getTourney', [ $match->tourney->id]) }}">
									<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ $match->tourney->logo }}" alt="{{ $match->tourney->name }}">
								</a>
							@endif
							<div style="float: right; clear: both; margin-left:20px; ">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamOne->logo }}" alt="Card image cap">
							</div>
							<div style="float: right; line-height: 35px;" >
								<a href="{{route('getTeam', [ $match->teamOne->id]) }}">
									{!! $match->teamOne->name !!}
								</a>
							</div>
						</div>
						<div class="col">
							<div style="width: 75px; line-height: 35px;  text-align: center;  float: left; background: #1b1e21">{{ $match->bets_amount_team_first }} P </div>
							<p style="float: left; margin-top: 5px; margin-left: 6px;  background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_first }}</p>
							<div>
								@if($match->code_status == 4)
									<p style="float: left; margin-top: 5px; margin-left: 20px;">Перенесен </p>
								@elseif( $match->code_status == 5)
									<p style="float: left; margin-top: 5px; margin-left: 20px;">Отменен </p>
								@else
									<p style="float: left; margin-top: 5px; margin-left: 20px;">{!! date('M d,   H:i', strtotime($match->started_at)) !!} </p>
								
								@endif
							</div>
							<div style="float: right; line-height: 35px; width: 75px; text-align: center; background: #1b1e21;">{{ $match->bets_amount_team_second }} P</div>
							<p style="float: right;  margin-top: 5px; margin-right: 6px; background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_second }}</p>
						</div>
						<div class="col" style="margin-left: -50px;">
							<div style="float: left; clear: both; margin: 0 20px 0 55px;">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamSecond->logo }}" alt="Card image cap">
							</div>
							<div style="line-height: 35px;">
								
								<a href="{{route('getTeam', [ $match->teamSecond->id]) }}">
									{!! $match->teamSecond->name !!}
								</a>
							</div>
						</div>
					</div>
				@endforeach
	</div>


</div>
<br>
<div class="poginate">
		{{ $upcoming->links() }}
	</div>
<br><br>
@endsection