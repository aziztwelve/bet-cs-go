@extends('admin.layouts.app')

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


		{!! Form::open(['url'=>route('admin.postEditTeam', ['id'=>$team->id]), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::hidden('id', $team->id) !!}
			{!! Form::label('name','Время', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name', $team->name, ['class'=>'form-control',]) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('id_country', 'Страна', ['class' => 'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
			<select class="custom-select" name="id_country" data-show-subtext="true" data-live-search="true" >
				<option value="{{ $country->id }}" selected>{{ $country->name }}</option>
				@foreach ($countries as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>
				@endforeach
			</select>
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('date_foundation','Дата основания', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('date_foundation', $team->date_foundation, ['class'=>'form-control',]) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('site', 'web-сайт', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('site', $team->site, ['class'=>'form-control']) !!}
			</div>
		</div>


		<div class="form-group ">
			{!! Form::label('description', 'Описание', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('description', $team->description, ['class'=>'form-control']) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('amount_prize', 'Сумма призовых', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('amount_prize', $team->amount_prize, ['class'=>'form-control']) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('code_status', 'Результат', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				<select name="code_status" class="custom-select">
					@if($team->code_status == 1)
				  <option selected value="{{ $team->code_status}}">Активная команда</option>
				  <option value="2">Команда удалена</option>
				   @elseif($team->code_status == 2)
				  <option selected value="{{ $team->code_status}}">Команда удалена</option>
				  <option value="1">Активная команда</option>
				  @endif
				</select>
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('logo', 'Логотип', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				<div>
				<img style="border: 2px solid #4C5660; max-height: 100px; max-width: 100px;" src="{{ URL::to('/images/teams') }}/{{ $team->logo }}" alt="">
				</div>
				<div>
					<p style="display: inline;">Изменить</p>
				{!! Form::file('logo',  ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет', 'style'=>'padding-top:10px;']) !!}
				</div>
			</div>
		</div>
	<hr>


	<br><br><br>

		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
			</div>
		</div>


		{!! Form::close() !!}
	</div>

@endsection