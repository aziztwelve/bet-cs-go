@extends('admin.layouts.app')

@section('content')
	
	
	<div class="container" style="width: 1100px; overflow-x: hidden;">
		@if (Session::has('success'))
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
					<div id="charge-message" class="alert alert-success">
						{{ Session::get('success') }}
					</div>
				</div>
			</div>
		@endif
		
		
		@if(count($errors)>0)
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							<li>
								{{$error}}
							</li>
						@endforeach
					</div>
				</div>
			</div>
		@endif
		<div id="admin-matches" >
			
			<br>
			<div style="display: inline;">
				
				<a style="float: left;" href="{{ route('admin.getAddMatch') }}" class="btn btn-dark">Добавить матч</a>
			
			</div><br><br><br>
			
			
			<div>
				<table class="table" style="overflow-x: hidden" >
					<thead>
					<tr>
						<th scope="col">Команда 1</th>
						<th scope="col">Команда 2</th>
						<th scope="col">Турнир</th>
						<th scope="col">Счет 1</th>
						<th scope="col">Счет 2</th>
						<th scope="col">Сумма 1</th>
						<th scope="col">Сумма 2</th>
						<th scope="col">Статус</th>
						<th scope="col">Время</th>
						<th scope="col">Изменить</th>
					</tr>
					</thead>
					@foreach($matches as $match)
						<tbody >
						<tr >
							<th scope="row">{!! $match->teamOne->name !!}</th>
							<th>{!! $match->teamSecond->name !!}</th>
							@if($match->tourney == null)
								<th>Нет</th>
							@elseif($match->tourney != null)
								<th>{!! $match->tourney->name !!}</th>
							@endif
							<td> {{ $match->score_team_first }} </td>
							<td>{{ $match->score_team_second }} </td>
							<td> {{ $match->bets_amount_team_first }} </td>
							<td> {{ $match->bets_amount_team_second }} </td>
							@if($match->code_status == 1)
								<th>Предстоящий</th>
							@elseif($match->code_status == 2)
								<th>Live</th>
							@elseif($match->code_status == 3)
								<th>Прошедший</th>
							@elseif($match->code_status == 4)
								<th>Перенесен</th>
							@elseif($match->code_status == 5)
								<th>Отменен</th>
							@elseif($match->code_status == 6)
								<th>Удален</th>
							@endif
							<td> {{ $match->started_at }} </td>
							
							<td>
								
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Изменить
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										{!! Html::link(route('admin.getEditMatch',['v'=> $match->id]), 'Редактировать', ['alt'=>$match->game, 'class'=>'dropdown-item']) !!}
										
										{!! Form::open(['url'=>route('admin.deleteMatch',['v'=> $match->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}
										
										{{ method_field('DELETE')}}
										{!! Form::button('Удалить',['class'=>'dropdown-item', 'type'=>'submit']) !!}
										
										{!! Form::close() !!}
									</div>
								</div>
							</td>
						</tr>
						
						</tbody>
					@endforeach
				</table>
			
			</div>
		</div>
	</div>

@endsection