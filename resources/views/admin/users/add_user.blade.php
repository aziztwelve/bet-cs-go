@extends('admin.layouts.app')

@section('content')

<div class="wrapper container-fluid col-md-7 col-md-offset-2">

	@if (Session::has('success')) 
		<div class="row" style="width: 1100px;">
			<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
				<div id="charge-message" class="alert alert-success">
					{{ Session::get('success') }}
				</div>
			</div>
		</div>
	@endif



	@if(count($errors)>0)
		<div class="row" style="width: 1100px;">
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
	<br><br>


	{!! Form::open(['url'=>route('admin.postAddUser'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		
		
		<div class="form-row">
			{!! Form::hidden('id') !!}
			<div class="form-group col-md-6">
				{!! Form::label('surname','Фамилия', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('surname', old('surname'), ['class'=>'form-control', 'placeholder'=>'Фамилия']) !!}
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('name','Имя', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Имя', 'required']) !!}
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('birthday','День рождения', ['class'=>'col-xs-2 control-label']) !!}
				{{  Form::date('birthday', \Carbon\Carbon::parse('1980-01-01'), ['class'=>'form-control']) }}
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('phone','Номер телефона', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Телефон', ]) !!}
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('email','E-mail', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::email('email', old('email'), ['class'=>'form-control', 'placeholder'=>'E-mail', 'required']) !!}
			</div>
			
			{{--<div class="form-group col-md-6">--}}
				{{--{!! Form::label('balance','Баланс', ['class'=>'col-xs-2 control-label']) !!}--}}
				{{--{!! Form::text('balance', old('balance'), ['class'=>'form-control', 'placeholder'=>'Баланс', 'value'=>'0']) !!}--}}
			{{--</div>--}}
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="password">Пароль</label>
			<input class="form-control" name="password" type="password" value="" placeholder="Пароль" required>
		</div>
			
			
			<div class="form-group col-md-6">
				<label for="password_confirmation">Повторить пароль</label>
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Повторить пароль">
		</div>
	</div>
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('code_role', 'Роль', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					<select name="code_role" class="custom-select">
							<option selected value="1">Игрок</option>
							<option value="2">Администратор</option>
							<option  value="3">Модератор</option>
					</select>
				</div>
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('code_status', 'Статус', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					<select name="code_status" class="custom-select">
							<option selected value="1">Активен</option>
							<option value="2">Неактивен</option>
							<option  value="3">Заблокирован</option>
					</select>
				</div>
			</div>
		</div>


	<div class="form-group row">
		<div class="col-sm-10">
			{!! Form::label('comment','Описание', ['class'=>'col-xs-2 control-label']) !!}
			{!! Form::textarea('comment', old('comment'), ['class'=>'form-control', 'placeholder'=>'Описание']) !!}
		</div>
	</div>


	<div class="form-group row">
		{!! Form::label('is_send_notifications', 'Уведомления', ['class' => 'col-xs-2 control-label', 'style'=>'margin-left:15px;']) !!}
		<div class="col-sm-10">
			<input type="checkbox" name="is_send_notifications" value="1" >
		</div>
	</div>


	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}
	
	
</div>

@endsection

