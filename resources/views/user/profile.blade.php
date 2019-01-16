@extends('layouts.main_page')

@section('content')
	<br><br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Мой профиль
			</div>
			<div class="card-body">
				
				<h6 >Фамилия:  <span class="badge badge-secondary">{{ Auth::user()->surname }}</span></h6>
				<h6 >Имя:  <span class="badge badge-secondary">{{ Auth::user()->name }}</span></h6>
				
				<h6 >День рождение:
					<span class="badge badge-secondary">
						@if(Auth::user()->birthday == null)
							Нет
						@elseif(Auth::user()->birthday == !null)
							{{ Auth::user()->birthday }}
						@endif
					</span>
				</h6>
				
				<h6 >Телефон:
					<span class="badge badge-secondary">
						@if(Auth::user()->phone == null)
							Нет
						@elseif(Auth::user()->phone == !null)
							{{ Auth::user()->name }}
						@endif
					</span>
				</h6>
				
				<h6 >E-mail:  <span class="badge badge-secondary">{{ Auth::user()->email }}</span></h6>
				
				<h6 >Описание:
					<span class="badge badge-secondary">
						@if(Auth::user()->comment == null)
							Нет
						@elseif(Auth::user()->comment == !null)
							{{ Auth::user()->comment }}
						@endif
					</span>
				</h6>
				
				<h6 >Право:  <span class="badge badge-secondary">
						@if(Auth::user()->code_role == 1)
							Игрок
						@elseif(Auth::user()->code_role == 2)
							Администратор
						@elseif(Auth::user()->code_role == 3)
							Модератор
						@endif
					</span>
				</h6>
				
				<h6 >Статус:
					<span class="badge badge-secondary">
						@if(Auth::user()->code_status == 1)
							Активен
						@elseif(Auth::user()->code_status == 2)
							Неактивен
						@elseif(Auth::user()->code_status == 3)
							Заблокирован
						@endif
					</span>
				</h6>
				<h6 >Баланс:  <span class="badge badge-secondary">{{ Auth::user()->balance }}</span></h6>
				<h6 >Уведомление:
					<span class="badge badge-secondary">
						@if(Auth::user()->is_send_notifications == true)
							да
						@elseif(Auth::user()->is_send_notifications == false)
							нет
						@endif
					</span>
				</h6>
				
				<br>
				<a href="{{ route('getChangeProfile', ['id'=> Auth::user()->id]) }}" class="btn btn-primary">Изменить</a>
			</div>
		</div>
	</div>
	
	<br><br>


@endsection