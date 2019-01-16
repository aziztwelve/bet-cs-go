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


	{!! Form::open(['url'=>route('admin.addPostTeam'), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('name','Название', ['class'=>'col-xs-2 control-label']) !!}
			{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Название']) !!}
		</div>
			
			<div class="form-group col-md-6">
				{!! Form::label('site','web-сайт', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('site', old('site'), ['class'=>'form-control', 'placeholder'=>'web-сайт']) !!}
			</div>
	</div>
		
		
		
		<div class="form-row">
		<div class="form-group col-md-6">
			{!! Form::label('amount_prize','Сумма призовых', ['class'=>'col-xs-2 control-label']) !!}
				{!! Form::text('amount_prize', old('amount_prize'), ['class'=>'form-control', 'placeholder'=>'Сумма призовых']) !!}
			</div>
			
			<div class="form-group col-md-6">
				{!! Form::label('date_foundation', 'Год основания', ['class' => 'col-xs-2 control-label']) !!}
				{{  Form::date('date_foundation',\Carbon\Carbon::now()->year, ['class'=>'form-control']) }}
		</div>
		</div>
			
			
			<div class="form-row">
				<div class="form-group col-md-6">
					{!! Form::label('id_country', 'Страна', ['class'=>'col-xs-2 control-label']) !!}
					<div class="col-xs-8">
						<select class="custom-select" name="id_country" data-show-subtext="true" data-live-search="true" >
							@foreach ($countries as $country)
								<option value="{{ $country->id }}">{{ $country->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				
				
				<div class="form-group col-md-6">
					{!! Form::label('code_status', 'Статус', ['class'=>'col-xs-2 control-label']) !!}
					<div class="col-xs-8">
						<select name="code_status" class="custom-select">
							<option selected value="1">Активная команда</option>
							<option value="2">Команда удалена</option>
						</select>
					</div>
				</div>
			</div>
		
		
		<div class="form-row">
			<div class="form-group ">
			{!! Form::label('description','Описание', ['class'=>'col-xs-2 control-label']) !!}
			{!! Form::textarea('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Описание']) !!}
		</div>
	</div>


	<div class="form-group row">
		{!! Form::label('logo','Логотип', ['class'=>'col-xs-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::file('logo', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary',  'data-placeholder'=>'Файла нет']) !!}
		</div>
	</div>
			
			<br>

	<div class="form-group">
		<div class="col-xs-offset-2 col-xs-10">
			{!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
		</div>
	</div>
	
	{!! Form::close() !!}

</div>


@endsection

