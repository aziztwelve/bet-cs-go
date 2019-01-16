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


		{!! Form::open(['url'=>route('admin.postEditMatch', ['id'=>$match->id]), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
		
		
		<div class="form-row">
			{!! Form::hidden('id', $match->id) !!}
			<div class="form-group col-md-6">
				{!! Form::label('id_team_first', 'Команда 1', ['class' => 'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
				<select class="custom-select" name="id_team_first" data-show-subtext="true" data-live-search="true" >
					<option value="{{ $teamOne->id }}" selected>{{ $teamOne->name }}</option>
					@foreach ($teams as $team)
						<option value="{{ $team->id }}">{{ $team->name }}</option>
					@endforeach
				</select>
				</div>
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('id_team_second', 'Команда 1', ['class' => 'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
				<select class="custom-select" name="id_team_second" data-show-subtext="true" data-live-search="true" >
					<option value="{{ $teamSecond->id }}" selected>{{ $teamSecond->name }}</option>
					@foreach ($teams as $team)
						<option value="{{ $team->id }}">{{ $team->name }}</option>
					@endforeach
				</select>
				</div>
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('score_team_first','Счет первой  команды', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					{!! Form::text('score_team_first', $match->score_team_first, ['class'=>'form-control',]) !!}
				</div>
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('score_team_second','Счет второй  команды', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					{!! Form::text('score_team_second', $match->score_team_second, ['class'=>'form-control',]) !!}
				</div>
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('id_tourney', 'Турнир', ['class' => 'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					<select class="custom-select" name="id_tourney" data-show-subtext="true" data-live-search="true" >
						@if($tourney_match != null)
						<option value="{{ $tourney_match->id }}" selected>{{ $tourney_match->name }}</option>
						@else
							<option value="0" selected>Нет</option>
						@endif
						@foreach ($tourneys as $tourney)
								<option value="0" >Нет</option>
								<option value="{{ $tourney->id }}">{{ $tourney->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('code_status', 'Статус матча', ['class' => 'col-xs-2 control-label',]) !!}
				<div class="col-xs-8">
					<select class="custom-select" name="code_status" data-show-subtext="true" data-live-search="true" >
						@if($match->code_status ==1)
						<option selected value="1">Предстоящий</option>
						<option value="2">Live</option>
						<option value="3">Прошедший</option>
						<option value="4">Перенесен</option>
						<option value="5">Отменен</option>
						<option value="6">Удален</option>
							@elseif($match->code_status ==2)
							<option  value="1">Предстоящий</option>
							<option selected  value="2">Live</option>
							<option value="3">Прошедший</option>
							<option value="4">Перенесен</option>
							<option value="5">Отменен</option>
							<option value="6">Удален</option>
							@elseif($match->code_status ==3)
							<option  value="1">Предстоящий</option>
							<option   value="2">Live</option>
							<option selected  value="3">Прошедший</option>
							<option value="4">Перенесен</option>
							<option value="5">Отменен</option>
							<option value="6">Удален</option>
							@elseif($match->code_status ==4)
							<option  value="1">Предстоящий</option>
							<option   value="2">Live</option>
							<option   value="3">Прошедший</option>
							<option selected  value="4">Перенесен</option>
							<option value="5">Отменен</option>
							<option value="6">Удален</option>
							@elseif($match->code_status ==5)
							<option  value="1">Предстоящий</option>
							<option   value="2">Live</option>
							<option   value="3">Прошедший</option>
							<option   value="4">Перенесен</option>
							<option selected  value="5">Отменен</option>
							<option value="6">Удален</option>
							@elseif($match->code_status ==6)
							<option  value="1">Предстоящий</option>
							<option   value="2">Live</option>
							<option   value="3">Прошедший</option>
							<option   value="4">Перенесен</option>
							<option   value="5">Отменен</option>
							<option selected  value="6">Удален</option>
							@endif
					</select>
				</div>
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('bets_amount_team_first','Сумма ставок на команду 1', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					{!! Form::text('bets_amount_team_first', $match->bets_amount_team_first, ['class'=>'form-control',]) !!}
				</div>
			</div>
			
			
			<div class="form-group col-md-6">
				{!! Form::label('bets_amount_team_second','Сумма ставок на команду 2', ['class'=>'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					{!! Form::text('bets_amount_team_second', $match->bets_amount_team_second, ['class'=>'form-control',]) !!}
				</div>
			</div>
		</div>
		
		
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('started_at', 'Начало матча', ['class' => 'col-xs-2 control-label',]) !!}
				<div class="col-xs-8">
					{{  Form::date('started_at', $match->started_at, [ 'class'=>'form-control']) }}
				</div>
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