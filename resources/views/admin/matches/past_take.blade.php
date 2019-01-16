
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
				
				<a style="float: left;" href="{{ route('admin.match') }}" class="btn btn-dark">Добавить матч</a>
				<div style="float: left; margin-left: 20px; " class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Матчи
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						{!! Html::link(route('admin.getUpcoming'), 'Предстоящие', ['class'=>'dropdown-item']) !!}
						
						{!! Html::link(route('admin.getCurrent'), 'Текущие', ['class'=>'dropdown-item']) !!}
						
						{!! Html::link(route('admin.getPast'), 'Прошедшие', ['class'=>'dropdown-item']) !!}
					</div>
				</div>
			
			</div>
			<br><br><br>
			
			<div>
				<p>Прошедшие матчи: Количество записей</p>
				<table class="table" style="overflow-x: hidden" >
					<thead>
					<tr>
						<th scope="col">Время</th>
						<th scope="col">Лига</th>
						<th scope="col">Команда 1</th>
						<th scope="col">Команда 2</th>
						<th scope="col">Сумма 1</th>
						<th scope="col">Сумма 2</th>
						<th scope="col">Коеф 1</th>
						<th scope="col">Коеф 2</th>
						<th scope="col">Счет 1</th>
						<th scope="col">Счет 2</th>
						<th scope="col">Результат/Статус</th>
						<th scope="col">Изменить</th>
					</tr>
					</thead>
					@foreach($past as $match)
						<tbody >
						<tr >
							<th scope="row">{!! date('H:i m/d ', strtotime($match->date)) !!}</th>
							<td> {{ $match->game }} </td>
							<td>{{ $match->team1 }} </td>
							<td> {{ $match->team2 }} </td>
							<td> {{ $match->sum_t1 }} </td>
							<td> {{ $match->sum_t2 }} </td>
							<td> {{ $match->coef_t1 }} </td>
							<td> {{ $match->coef_t2 }} </td>
							<td> {{ $match->count_t1 }} </td>
							<td> {{ $match->count_t2 }} </td>
							<td> {{ $match->result }}/{{ $match->status }} </td>
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
		<br>
		<br><br>
		<br><br>
		
		{!! Form::open(['url'=>route('admin.getPastBetween'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		@csrf
		<div class="form-row">
			<div class="col">
				С
				{{  Form::date('from', \Carbon\Carbon::today()->toDateString()) }}
			</div>
			<div class="col">
				До
				{{  Form::date('to', \Carbon\Carbon::today()->addDays(3)->toDateString()) }}
			</div>
			<div class="col">
				Кол-во матчей
				<input type="text" name="count" >
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Искать', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
			</div>
		</div>
		
		{!! Form::close() !!}
		
		<br><br>
		
		{!! Form::open(['url'=>route('admin.getPastTake'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		@csrf
		<div class="form-row">
			
			<div class="col">
				Кол-во записей
				<input type="text" name="count" >
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Искать', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
			</div>
		</div>
		
		{!! Form::close() !!}
	</div>

@endsection