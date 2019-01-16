
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="{{ route('admin.') }}">
					<i class="fas fa-home"></i>
					Админ панель <span class="sr-only">(current)</span>
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="{{ route('admin.getUsers') }}">
					<i class="fas fa-users"></i>
					Пользователи
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="{{ route('admin.getMatches') }}">
					<i class="fas fa-trophy"></i>
					Матчи
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="{{ route('admin.getTeam') }}">
					<i class="fas fa-trophy"></i>
					Команды
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="{{ route('admin.getTourney') }}">
					<i class="fas fa-trophy"></i>
					Турниры
				</a>
			</li>
	
	</div>
</nav>