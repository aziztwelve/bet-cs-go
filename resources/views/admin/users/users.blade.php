@extends('admin.layouts.app')

@section('content')
	
	
	<div class="container" style="width: 1100px;">
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
		
		<a  style="float: right; margin: 10px 30px 10px 10px; " href="{{ route('admin.getAddUser') }}" class="btn btn-dark">Добавить пользователя</a>
			
			
			<div>
				<table class="table" style="overflow-x: hidden" >
					<thead>
					<tr>
						<th scope="col">Фамилия</th>
						<th scope="col">Имя</th>
						<th scope="col">День Рождения</th>
						<th scope="col">Телефон</th>
						<th scope="col">E-mail</th>
						<th scope="col">Роль</th>
						<th scope="col">Статус</th>
						<th scope="col">Баланс</th>
						<th scope="col">Изменить</th>
					</tr>
					</thead>
					@foreach($users as $user)
						<tbody >
						<tr >
							<th scope="row">{!! $user->surname !!}</th>
							<th scope="row">{!! $user->name !!}</th>
							@if($user->birthday == null)
								<th>Пусто</th>
							@else
								<th>{!! $user->birthday !!}</th>
							@endif
							
							@if($user->phone == null)
								<th>Пусто</th>
							@else
								<th>{!! $user->phone !!}</th>
							@endif
							
							<td> {{  $user->email  }} </td>
							
							@if($user->code_role == 1)
								<th>Пользователь</th>
							@elseif($user->code_role == 2)
								<th>Админ</th>
							@elseif($user->code_role == 3)
								<th>Модератор</th>
							@endif
							
							@if($user->code_status == 1)
								<th>Активный</th>
							@elseif($user->code_status == 2)
								<th>Неактивный</th>
							@elseif($user->code_status== 3)
							@endif
							
							<td>{{ $user->balance }} </td>
							
							<td>
								
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Изменить
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										{!! Html::link(route('admin.getEditUser',['v'=> $user->id]), 'Редактировать', ['alt'=>$user->name, 'class'=>'dropdown-item']) !!}
										
										{!! Form::open(['url'=>route('admin.deleteUser',['v'=> $user->id]), 'class'=>'form-horizontal', 'method'=>'POST']) !!}
										
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
	</div>

@endsection