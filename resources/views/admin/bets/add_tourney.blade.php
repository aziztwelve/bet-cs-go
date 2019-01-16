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


	{!! Form::open(['url'=>route('admin.addPostTourney'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}


	<div class="form-row ">
		<div class="form-group col-md-6">
		{!! Form::label('name', 'Название', ['class' => 'col-xs-2 control-label']) !!}
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Название']) !!}
		</div>
	</div>


	<div class="form-row ">
		<div class="form-group col-md-6">
		{!! Form::label('id_main_tourney', 'Турнир(пока не реализовано)', ['class' => 'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
		<select class="custom-select" name="id_main_tourney" data-show-subtext="true" data-live-search="true" >
			<option value="1">Турнир 1</option>
			<option value="2">Турнир 2</option>
		</select>
		</div>
	</div>
		
		
		<div class="form-group col-md-6">
		{!! Form::label('id_game', 'Игра(пока не реализовано)', ['class' => 'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
		<select class="custom-select" name="id_game" data-show-subtext="true" data-live-search="true" >
			<option value="1">Игра 1</option>
			<option value="2">Игра 2</option>
		</select>
		</div>
	</div>
	</div>


	<div class="form-row ">
		<div class="form-group col-md-6">
			{!! Form::label('description', 'Описание', ['class' => 'col-xs-2 control-label']) !!}
			{!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Описание']) !!}
		</div>


		<div class="form-group col-md-6">
		{!! Form::label('format', 'Формат', ['class' => 'col-xs-2 control-label']) !!}
			{!! Form::textarea('format', old('format'), ['class'=>'form-control', 'placeholder'=>'Формат', 'rows' => 3]) !!}
		</div>
	</div>
		
		
		<div class="form-row ">
			<div class="form-group col-md-6">
			{!! Form::label('location', 'Местоположение', ['class' => 'col-xs-2 control-label']) !!}
				{!! Form::text('location', old('location'), ['class'=>'form-control', 'placeholder'=>'Местоположение']) !!}
			</div>
		
		
		<div class="form-group col-md-6">
		{!! Form::label('fund', 'Призовой фонд', ['class' => 'col-xs-2 control-label']) !!}
				{!! Form::text('fund', old('fund'), ['class'=>'form-control', 'placeholder'=>'Призовой фонд']) !!}
			</div>
		</div>
		
		
		
		<div class="form-row ">
			<div class="form-group col-md-6">
			{!! Form::label('code_status', 'Статус', ['class' => 'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
				<select class="custom-select" name="code_status" data-show-subtext="true" data-live-search="true" >
					<option value="1">Прошедший</option>
					<option value="2">Активный</option>
					<option value="3">Будущий</option>
				</select>
			</div>
		</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('started_at','Начало', ['class'=>'col-xs-2 control-label']) !!}
				{{  Form::date('started_at', \Carbon\Carbon::parse('2018-05-05'), ['class'=>'form-control']) }}
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('finished_at','Окончание', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::date('finished_at',  \Carbon\Carbon::parse('2018-05-05'), ['class'=>'form-control',  ]) !!}
			</div>
		</div>
		
		
		<div class="form-group ">
			{!! Form::label('logo','Логотип', ['class'=>'col-xs-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::file('logo', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
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

