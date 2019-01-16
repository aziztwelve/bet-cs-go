@extends('layouts.main_page')

@section('content')
	
	
	<div class="wrapper container-fluid col-md-8 col-md-offset-2">
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
		
		
		{!! Form::open(['url'=>route('postChangeProfile', ['id'=>$user->id]), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		<br><br>
		{{-- <div class="form-group row">
			{!! Form::hidden('id', $user->id) !!}
			{!! Form::label('surname','Фамилия', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('surname', $user->surname, ['class'=>'form-control',]) !!}
			</div>
		</div>
		
		
		<div class="form-group row">
			{!! Form::label('name','Имя', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('name', $user->name, ['class'=>'form-control',]) !!}
			</div>
		</div> --}}


		<div class="form-row">
			{!! Form::hidden('id', $user->id) !!}
			<div class="form-group col-md-6">
				{!! Form::label('surname','Фамилия', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('surname', $user->surname, ['class'=>'form-control', 'placeholder'=>'Фамилия']) !!}
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('name','Имя', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Имя', 'required']) !!}
			</div>
		</div>


		
		
		{{-- <div class="form-group row">
			{!! Form::label('birthday','День рождение', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('birthday', $user->birthday, ['class'=>'form-control',]) !!}
			</div>
		</div>
		
		
		<div class="form-group row">
			{!! Form::label('phone','Телефон', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('phone', $user->phone, ['class'=>'form-control',]) !!}
			</div>
		</div> --}}




		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('birthday','День рождения', ['class'=>'col-xs-2 control-label']) !!}
				{{  Form::date('birthday', $user->birthday, ['class'=>'form-control',  'placeholder'=>'День рождения',]) }}
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('phone','Номер телефона', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('phone', $user->phone, ['class'=>'form-control', 'placeholder'=>'Телефон', ]) !!}
			</div>
		</div>


		
		
		{{-- <div class="form-group row">
			{!! Form::label('email','E-mail', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::email('email', $user->email, ['class'=>'form-control',]) !!}
			</div>
		</div> --}}




		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('email','E-mail', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'E-mail', 'required']) !!}
			</div>
			
			{{-- <div class="form-group col-md-6">
				{!! Form::label('balance','Баланс', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('balance', $user->balance, ['class'=>'form-control', 'placeholder'=>'Баланс', ]) !!}
			</div> --}}
		</div>



		
		
		<div class="form-row">
			<div class="form-group col-md-6">
			{!! Form::label('password','Пароль', ['class'=>'col-xs-2 control-label']) !!}
				<input class="form-control" name="password" type="password" value="" placeholder="Пароль">
			</div>
		
		
			<div class="form-group col-md-6">
				{!! Form::label('password','Пароль', ['class'=>'col-xs-2 control-label']) !!}
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Повторить пароль">
			</div>
		</div>




		
		
		<div class="form-row">
			<div class="form-group col-md-6">
			{!! Form::label('comment','Описание', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::textarea('comment', $user->comment, ['class'=>'form-control',]) !!}
			</div>
		</div>
		
		
		<div class="form-group row">
			{!! Form::label('is_send_notifications', 'Уведомления', ['class' => 'col-xs-2 control-label', 'style'=>'margin-left:15px;']) !!}
			<div class="col-sm-10">
				@if($user->is_send_notifications == 1)
					<input type="checkbox" name="is_send_notifications" value="1" checked>
				@elseif($user->is_send_notifications == 0)
					<input type="checkbox" name="is_send_notifications" value="0" >
				@endif
			</div>
		</div>
		
		
		<br><br><br>
		
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
			</div>
		</div>
		
		{!! Form::close() !!}
	</div>

@endsection