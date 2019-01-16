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
				
				<a style="float: left;" href="{{ route('admin.addGetTourney') }}" class="btn btn-dark">Добавить турнир</a>
				
			
			</div><br><br><br>
			
			
			
			<div>
				<table class="table" style="overflow-x: hidden" >
					<thead>
					<tr>
						<!-- <th scope="col">#</th> -->
						<th scope="col">Основной</th>
						<th scope="col">Игра</th>
						<th scope="col">Название</th>
						<th scope="col">Описание</th>
						<th scope="col">Локация</th>
						<th scope="col">Формат</th>
						<th scope="col">Сумма призовых</th>
						<th scope="col">Статус</th>
						<th scope="col">Начало</th>
						<th scope="col">Конец</th>
						<th scope="col">Изменить</th>
					</tr>
					</thead>
					@foreach($tourneys as $tourney)
						<tbody >
						<tr >
							<td>  {{ $tourney->id_main_tourney }} </td>
							<td>{{ $tourney->id_game }}  </td>
							<td> {{ $tourney->name }}  </td>
							<td> {{ $tourney->description }}  </td>
							<td> {{ $tourney->location }}  </td>
							<td> {{ $tourney->format }}  </td>
							<td> {{ $tourney->fund }}  </td>
							<td> {{ $tourney->code_status }}  </td>
							<td> {{ $tourney->started_at }}  </td>
							<td> {{ $tourney->finished_at }}  </td>
							
							<td>
								
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Изменить
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										{!! Html::link(route('admin.getEditTourney',['v'=> $tourney->id]), 'Редактировать', ['alt'=>$tourney->name, 'class'=>'dropdown-item']) !!}
										
										{!! Form::open(['url'=>route('admin.deleteTourney',['v'=> $tourney->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}
										
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