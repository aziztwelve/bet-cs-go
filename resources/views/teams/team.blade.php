@extends('layouts.main_page')


@section('content')
	<br><br>
	<div class="container">
		<div class="card">
			
			<div class="card-header">
				Матч:   {{$team->name}}
			</div>
			
			
			<div class="card-body">
				
				<h6 >Название:
					<span class="badge badge-secondary">{{ $team->name }}</span>
				</h6>
				
				<h6 >Страна:
					@if($country == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $country->name }}</span>
					@endif
				</h6>
				
				<h6 >Web-сайт:
					@if($team->site == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">
                <a href=" {{ $team->site }}"> {{ $team->site }}</a>
                </span>
					@endif
				</h6>
				
				<h6 >Дата основания:
					@if($team->date_foundation == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $team->date_foundation }}</span>
					@endif
				</h6>
				
				<h6 >Описание:
					<span style="font-size: 12px; color: #151515;background: #fcef57;">{{  $team->description }}</span>
				</h6>
				
				<h6 >Сумма призовых:
					@if($team->amount_prize == null)
						<span class="badge badge-secondary">Нет</span>
					@else
						<span class="badge badge-secondary">{{ $team->amount_prize }} $</span>
					@endif
				</h6>
				
				<h6 >Статус:
					@if($team->code_status == 1)
						<span class="badge badge-secondary">Активная команда</span>
					@elseif($team->code_status == 2)
						<span class="badge badge-secondary">Команда удалена</span>
					@endif
				</h6>
			
			</div>
			
			
			<div style="margin-left: 20px;">
				<img src=" {{$team->logo}}" alt="">
			</div>
		</div>
	</div>
	
	<br><br>

@endsection