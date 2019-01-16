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
				
				<a style="float: left;" href="{{ route('admin.addGetTeam') }}" class="btn btn-dark">Добавить команду</a>
			
			</div><br><br><br>
			
			<div>
				<table class="table" style="overflow-x: hidden" >
					<thead>
					<tr>
						<th scope="col">Год</th>
						<th scope="col">Название</th>
						<th scope="col">Страна</th>
						<th scope="col">web-сайт</th>
						<th scope="col">Описание</th>
						<th scope="col">Сумма призов</th>
					</tr>
					</thead>
					@foreach($teams as $team)
						<tbody >
						<tr >
							<th scope="row">{!! ($team->date_foundation) !!}</th>
							<td>  {{ $team->name }} </td>
							<td>{{ $team->country->name }}  </td>
							<td> {{ $team->site }}  </td>
							<td> {{ $team->description }}  </td>
							<td> {{ $team->amount_prize }}  </td>
							
							<td>
								
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Изменить
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										{!! Html::link(route('admin.getEditTeam',['v'=> $team->id]), 'Редактировать', ['alt'=>$team->name, 'class'=>'dropdown-item']) !!}
										
										{!! Form::open(['url'=>route('admin.deleteTeam',['v'=> $team->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}
										
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