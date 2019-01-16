@extends('layouts.main_page')


@section('content')
	<br><br>
	<div class="container">
		<div class="card">
			
			<div class="card-header">
				Турнир:   {{$tourney->name}}
			</div>
			
			
			<div class="card-body">
				
				<h6 >Главный турнир:
					@if($tourney->id_main_tourney == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $tourney->id_main_tourney }}</span>
					@endif
				</h6>
				<h6 >Игра:
					@if($game == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $game->name }}</span>
					@endif
				</h6>
				
				<h6 >Название:
					<span class="badge badge-secondary">{{ $tourney->name }}</span>
				</h6>
				
				<h6 >Описание:
					@if($tourney->description == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $tourney->description }}</span>
					@endif
				</h6>
				
				<h6 >Местоположение:
					@if($tourney->location == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $tourney->location }}</span>
					@endif
				</h6>
				
				<h6 >Формат:
					@if($tourney->format == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $tourney->format }}</span>
					@endif
				</h6>
				
				<h6 >Призовой фонд:
					@if($tourney->fund == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $tourney->fund }} $</span>
					@endif
				</h6>
				
				<h6 >Статус:
					@if($tourney->code_status == 1)
						<span class="badge badge-secondary">Будущий</span>
					@elseif($tourney->code_status == 2)
						<span class="badge badge-secondary">Активный</span>
					@elseif($tourney->code_status == 3)
						<span class="badge badge-secondary">Прошедший</span>
					@endif
				</h6>
				
				<h6 >Начало:
					<span class="badge badge-secondary">{{ $tourney->started_at }}</span>
				</h6>
				
				<h6 >Окончание:
					<span class="badge badge-secondary">{{ $tourney->finished_at }}</span>
				</h6>
			
			</div>
			
			
			<div style="margin-left: 20px;">
				<img src=" {{$tourney->logo}}" alt="">
			</div>
		</div>
	</div>
	
	<br><br>


@endsection