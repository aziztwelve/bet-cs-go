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
		
		<a  style="float: right; margin: 10px 30px 10px 10px; " href="{{ route('admin.addGetUser') }}" class="btn btn-dark">Добавить пользователя</a>
		
		
		<div id="admin-users" >
			<admin-users></admin-users>
		</div>
	</div>

@endsection