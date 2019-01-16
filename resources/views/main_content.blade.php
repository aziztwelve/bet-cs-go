@extends('layouts.main_page')

@section('content')
	
	
	<section class="section swiper-container swiper-slider swiper-classic bg-gray-2 swiper-container-horizontal swiper-container-fade" data-loop="true" data-autoplay="false" data-simulate-touch="false" data-lazy-loading="true" data-slide-effect="fade">
		<div class="swiper-wrapper" style="transition-duration: 0ms;">
			<div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-slide-bg="{{ asset('one/images/landing-soccer-slider-1-slide-2-1920x671.jpg') }} " style="background-image: url(&quot;one/images/landing-soccer-slider-1-slide-2-1920x671.jpg&quot;); background-size: cover; width: 1350px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="1">
				<div class="container">
					<div class="swiper-slide-caption">
						<h1 data-caption-animate="fadeInUp" data-caption-delay="100" class="not-animated">We are <br> pros</h1>
						<h4 data-caption-animate="fadeInUp" data-caption-delay="200" class="not-animated">In everything concerning soccer</h4>
						<a class="button button-gray-outline not-animated" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="swiper-slide swiper-slide-active" data-slide-bg="one/images/landing-soccer-slider-1-slide-1-1920x671.jpg" style="background-image: url(&quot;one/images/landing-soccer-slider-1-slide-1-1920x671.jpg&quot;); background-size: cover; width: 1350px; transform: translate3d(-1350px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="0">
				<div class="container">
					<div class="swiper-slide-caption">
						<h1 data-caption-animate="fadeInUp" data-caption-delay="100" class="fadeInUp animated">Ставки в CS:GO</h1>
						<h4 data-caption-animate="fadeInUp" data-caption-delay="200" class="fadeInUp animated">Игра #1 в мире</h4>
						<a class="button button-gray-outline fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-slide-bg="one/images/landing-soccer-slider-1-slide-2-1920x671.jpg" style="background-image: url(&quot;one/images/landing-soccer-slider-1-slide-2-1920x671.jpg&quot;); background-size: cover; width: 1350px; transform: translate3d(-2700px, 0px, 0px); opacity: 0; transition-duration: 0ms;" data-swiper-slide-index="1">
				<div class="container">
					<div class="swiper-slide-caption">
						<h1 data-caption-animate="fadeInUp" data-caption-delay="100" class="not-animated">We are <br> pros</h1>
						<h4 data-caption-animate="fadeInUp" data-caption-delay="200" class="not-animated">In everything concerning soccer</h4>
						<a class="button button-gray-outline not-animated" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-slide-bg="/one/images/landing-soccer-slider-1-slide-1-1920x671.jpg" style="background-image: url(&quot;one/images/landing-soccer-slider-1-slide-1-1920x671.jpg&quot;); background-size: cover; width: 1350px; transform: translate3d(-4050px, 0px, 0px); opacity: 0; transition-duration: 0ms;" data-swiper-slide-index="0">
				<div class="container">
					<div class="swiper-slide-caption">
						<h1 data-caption-animate="fadeInUp" data-caption-delay="100" class="not-animated">We play <br> Soccer</h1>
						<h4 data-caption-animate="fadeInUp" data-caption-delay="200" class="not-animated">like no one else in the united states</h4>
						<a class="button button-gray-outline not-animated" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-button swiper-button-prev"></div>
		<div class="swiper-button swiper-button-next"></div>
		<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
			<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
			<span class="swiper-pagination-bullet"></span>
		</div>
	</section>
	
	<section class="section section-md bg-gray-100">
		
		
		
		
		{{-- =======================MATCHES================================= --}}
		
		<div class="container">
			<p>Предстоящие матчи</p>
			
			
			<div class="container">
				@foreach($upcoming as $match)
					<div class="row" style="background-color: white">
						<div class="col" >
							@if($match->tourney ==null)
								<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ URL::to('/images/noimage/nologo.png') }}" alt="Card image cap">
							@else
								<a href="{{route('getTourney', [ $match->tourney->id]) }}">
									<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ $match->tourney->logo }}" alt="{{ $match->tourney->name }}">
								</a>
							@endif
							<div style="float: right; clear: both; margin-left:20px; ">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamOne->logo }}" alt="Card image cap">
							</div>
							<div style="float: right; line-height: 35px;" >
								<a href="{{route('getTeam', [ $match->teamOne->id]) }}">
									{!! $match->teamOne->name !!}
								</a>
							</div>
						</div>
						<div class="col">
							<div style="width: 75px; line-height: 35px;  text-align: center;  float: left; background: #1b1e21">{{ $match->bets_amount_team_first }} P </div>
							<p style="float: left; margin-top: 5px; margin-left: 6px;  background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_first }}</p>
							<div>
								@if($match->code_status == 4)
									<p style="float: left; margin-top: 5px; margin-left: 20px;">Перенесен </p>
								@elseif( $match->code_status == 5)
									<p style="float: left; margin-top: 5px; margin-left: 20px;">Отменен </p>
								@else
									<p style="float: left; margin-top: 5px; margin-left: 20px;">{!! date('M d,   H:i', strtotime($match->started_at)) !!} </p>
								
								@endif
							</div>
							<div style="float: right; line-height: 35px; width: 75px; text-align: center; background: #1b1e21;">{{ $match->bets_amount_team_second }} P</div>
							<p style="float: right;  margin-top: 5px; margin-right: 6px; background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_second }}</p>
						</div>
						<div class="col" style="margin-left: -50px;">
							<div style="float: left; clear: both; margin: 0 20px 0 55px;">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamSecond->logo }}" alt="Card image cap">
							</div>
							<div style="line-height: 35px;">
								
								<a href="{{route('getTeam', [ $match->teamSecond->id]) }}">
									{!! $match->teamSecond->name !!}
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div
			<br><br>
			
			<a class="btn btn-primary" href="{{ route('getUpcoming') }}" role="button">Все предстоящие матчи</a>
			<br><br>
		
		</div>
		
		
		<br><br><hr>
		
		<div class="container">
			<p>Текущие матчи</p>
			
			
			<div class="container">
				@foreach($current as $match)
					<div class="row" style="background-color: white">
						<div class="col" >
							@if($match->tourney ==null)
								<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ URL::to('/images/noimage/nologo.png') }}" alt="Card image cap">
							@else
								<a href="{{route('getTourney', [ $match->tourney->id]) }}">
									<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ $match->tourney->logo }}" alt="{{ $match->tourney->name }}">
								</a>
							@endif
							<div style="float: right; clear: both; margin-left:20px; ">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamOne->logo }}" alt="Card image cap">
							</div>
							<div style="float: right; line-height: 35px;" >
								<a href="{{route('getTeam', [ $match->teamOne->id]) }}">
									{!! $match->teamOne->name !!}
								</a>
							</div>
						</div>
						<div class="col">
							<div style="width: 75px; line-height: 35px;  text-align: center;  float: left; background: #1b1e21">{{ $match->bets_amount_team_first }} P </div>
							<p style="float: left; margin-top: 5px; margin-left: 6px;  background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_first }}</p>
							<div>
								<p style="float: left; margin-top: 5px; margin-left: 20px;">{!! date('M d,   H:i', strtotime($match->started_at)) !!} </p>
							
							</div>
							<div style="float: right; line-height: 35px; width: 75px; text-align: center; background: #1b1e21;">{{ $match->bets_amount_team_second }} P</div>
							<p style="float: right;  margin-top: 5px; margin-right: 6px; background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_second }}</p>
						</div>
						<div class="col" style="margin-left: -50px;">
							<div style="float: left; clear: both; margin: 0 20px 0 55px;">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamSecond->logo }}" alt="Card image cap">
							</div>
							<div style="line-height: 35px;">
								<a href="{{route('getTeam', [ $match->teamSecond->id]) }}">
									{!! $match->teamSecond->name !!}
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			
			<br>
		
		</div>
		
		
		
		<br><br><hr>
		
		<div class="container">
			<p>Прошедшие матчи</p>
			
			
			
			
			<div class="container">
				@foreach($past as $match)
					<div class="row" style="background-color: white">
						<div class="col" >
							@if($match->tourney ==null)
								<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ URL::to('/images/noimage/nologo.png') }}" alt="Card image cap">
							@else
								<a href="{{route('getTourney', [ $match->tourney->id]) }}">
									<img style="width: 55px; height: 35px; margin-left: -13px;" class="card-img-top" src="{{ $match->tourney->logo }}" alt="{{ $match->tourney->name }}">
								</a>
							@endif
							<div style="float: right; clear: both; margin-left:20px; ">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamOne->logo }}" alt="Card image cap">
							</div>
							<div style="float: right; line-height: 35px;" >
								<a href="{{route('getTeam', [ $match->teamOne->id]) }}">
									{!! $match->teamOne->name !!}
								</a>
							</div>
						</div>
						<div class="col">
							<div style="width: 75px; line-height: 35px;  text-align: center;  float: left; background: #1b1e21">{{ $match->bets_amount_team_first }} P </div>
							<p style="float: left; margin-top: 5px; margin-left: 6px;  background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_first }}</p>
							<div>
								@if($match->code_status == 4)
									<p style="float: left; margin-top: 5px; margin-left: 30px;">Перенесен </p>
								@elseif( $match->code_status == 5)
									<p style="float: left; margin-top: 5px; margin-left: 30px;">Отменен </p>
								@else
									<p style="float: left; margin-top: 5px; margin-left: 45px;">{{$match->score_team_first}} : {{$match->score_team_second}} </p>
								
								
								@endif
							</div>
							<div style="float: right; line-height: 35px; width: 75px; text-align: center; background: #1b1e21;">{{ $match->bets_amount_team_second }} P</div>
							<p style="float: right;  margin-top: 5px; margin-right: 6px; background: rgba(246,236,237,0.76)">{{ $match->win_factor_team_second }}</p>
						</div>
						<div class="col" style="margin-left: -50px;">
							<div style="float: left; clear: both; margin: 0 20px 0 55px;">
								<img style="width: 35px; height: 35px;" class="card-img-top" src="{{ $match->teamSecond->logo }}" alt="Card image cap">
							</div>
							<div style="line-height: 35px;">
								<a href="{{route('getTeam', [ $match->teamSecond->id]) }}">
									{!! $match->teamSecond->name !!}
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			
			<br>
			
			<a class="btn btn-primary" href="{{ route('getPast') }}" role="button">Все прошедшие матчи</a>
			<br><br>
		
		</div>
		
		
		
		
		{{-- ================================================================== --}}
		
		<div class="container">
			<div class="row row-50">
				<div class="col-lg-8">
					<div class="main-component">
						<!-- Heading Component-->
						<article class="heading-component">
							<div class="heading-component-inner">
								<h5 class="heading-component-title">Ожидаемые матчи
								</h5><a class="button button-xs button-gray-outline" href="sport-elements.html">Календарь</a>
							</div>
						</article>
						
						<!-- Game Result Bug-->
						<article class="game-result">
							<div class="game-info game-info-creative">
								<p class="game-info-subtitle">
									<time datetime="08:30">21:00 MSK</time>
								</p>
								<h3 class="game-info-title">Winter series has arrived</h3>
								<div class="game-info-main">
									<div class="game-info-team game-info-team-first">
										<figure>
											<img src="{{ asset('one/images/Nexus.png') }}" alt="" width="100" height="100">
										</figure>
										<div class="game-result-team-name">Nexus</div>
										<div class="game-result-team-country">52%   x1.82 </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
									<div class="game-info-middle game-info-middle-vertical">
										<time class="time-big" datetime="2017-04-17">
											<span class="heading-3">Вск</span> 15 Апр. 2018
										</time>
										<div class="game-result-divider-wrap">
											<span class="game-info-team-divider">VS</span>
										</div>
										<div class="group-sm">
											<div class="button button-sm button-Поделиться-outline">Поделиться
												<ul class="game-info-Поделиться">
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-facebook" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-twitter" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-google-plus" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-instagram" href="#"></a>
													</li>
												</ul>
											</div>
											<a class="button button-sm button-primary" href="#">Подробнее о матче</a>
										</div>
									</div>
									<div class="game-info-team game-info-team-second">
										<figure>
											<img src="{{ asset('one/images/Berzerk.png') }}" alt="" width="113" height="106">
										</figure>
										<div class="game-result-team-name">Berzerk</div>
										<div class="game-result-team-country">x1.99   48% </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
								</div>
							</div>
							<div class="game-info-countdown">
								<div class="countdown countdown-bordered is-countdown" data-type="until" data-time="31 Dec 2018 16:00" data-format="dhms" data-style="short">
                        <span class="countdown-row countdown-show4">
                           <span class="countdown-section">
                              <span class="countdown-amount">1</span>
                              <span class="countdown-period">Дн.</span>
                           </span>
                           <span class="countdown-section">
                              <span class="countdown-amount">4</span>
                              <span class="countdown-period">Час.</span>
                           </span>
                           <span class="countdown-section">
                              <span class="countdown-amount">5</span>
                              <span class="countdown-period">Мин.</span>
                           </span>
                           <span class="countdown-section">
                              <span class="countdown-amount">57</span>
                              <span class="countdown-period">Сек.</span>
                           </span>
                        </span>
								</div>
							</div>
						</article>
						<article class="game-result">
							<div class="game-info game-info-creative">
								<p class="game-info-subtitle">
									<time datetime="08:30">21:00 MSK</time>
								</p>
								<h3 class="game-info-title">Winter series has arrived</h3>
								<div class="game-info-main">
									<div class="game-info-team game-info-team-first">
										<figure>
											<img src="{{ asset('one/images/Nexus.png') }}" alt="" width="100" height="100">
										</figure>
										<div class="game-result-team-name">Nexus</div>
										<div class="game-result-team-country">52%   x1.82 </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
									<div class="game-info-middle game-info-middle-vertical">
										<time class="time-big" datetime="2017-04-17">
											<span class="heading-3">Вск</span> 15 Апр. 2018
										</time>
										<div class="game-result-divider-wrap">
											<span class="game-info-team-divider">VS</span>
										</div>
										<div class="group-sm">
											<div class="button button-sm button-Поделиться-outline">Поделиться
												<ul class="game-info-Поделиться">
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-facebook" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-twitter" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-google-plus" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-instagram" href="#"></a>
													</li>
												</ul>
											</div>
											<a class="button button-sm button-primary" href="#">Подробнее о матче</a>
										</div>
									</div>
									<div class="game-info-team game-info-team-second">
										<figure>
											<img src="{{ asset('one/images/Berzerk.png') }}" alt="" width="113" height="106">
										</figure>
										<div class="game-result-team-name">Berzerk</div>
										<div class="game-result-team-country">x1.99   48% </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
								</div>
							</div>
							<div class="game-info-countdown">
								<div class="countdown countdown-bordered is-countdown" data-type="until" data-time="31 Dec 2018 16:00" data-format="dhms" data-style="short">
									<span class="countdown-row countdown-show4">
										<span class="countdown-section">
											<span class="countdown-amount">1</span>
											<span class="countdown-period">Дн.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">4</span>
											<span class="countdown-period">Час.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">5</span>
											<span class="countdown-period">Мин.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">57</span>
											<span class="countdown-period">Сек.</span>
										</span>
									</span>
								</div>
							</div>
						</article>
						<article class="game-result">
							<div class="game-info game-info-creative">
								<p class="game-info-subtitle">
									<time datetime="08:30">21:00 MSK</time>
								</p>
								<h3 class="game-info-title">Winter series has arrived</h3>
								<div class="game-info-main">
									<div class="game-info-team game-info-team-first">
										<figure>
											<img src="{{ asset('one/images/Nexus.png') }}" alt="" width="100" height="100">
										</figure>
										<div class="game-result-team-name">Nexus</div>
										<div class="game-result-team-country">52%   x1.82 </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
									<div class="game-info-middle game-info-middle-vertical">
										<time class="time-big" datetime="2017-04-17">
											<span class="heading-3">Вск</span> 15 Апр. 2018
										</time>
										<div class="game-result-divider-wrap">
											<span class="game-info-team-divider">VS</span>
										</div>
										<div class="group-sm">
											<div class="button button-sm button-Поделиться-outline">Поделиться
												<ul class="game-info-Поделиться">
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-facebook" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-twitter" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-google-plus" href="#"></a>
													</li>
													<li class="game-info-Поделиться-item">
														<a class="icon fa fa-instagram" href="#"></a>
													</li>
												</ul>
											</div>
											<a class="button button-sm button-primary" href="#">Подробнее о матче</a>
										</div>
									</div>
									<div class="game-info-team game-info-team-second">
										<figure>
											<img src="{{ asset('one/images/Berzerk.png') }}" alt="" width="113" height="106">
										</figure>
										<div class="game-result-team-name">Berzerk</div>
										<div class="game-result-team-country">x1.99   48% </div>
										<a class="button button-sm button-primary" href="#">На победу в матче</a>
									</div>
								</div>
							</div>
							<div class="game-info-countdown">
								<div class="countdown countdown-bordered is-countdown" data-type="until" data-time="31 Dec 2018 16:00" data-format="dhms" data-style="short">
									<span class="countdown-row countdown-show4">
										<span class="countdown-section">
											<span class="countdown-amount">1</span>
											<span class="countdown-period">Дн.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">4</span>
											<span class="countdown-period">Час.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">5</span>
											<span class="countdown-period">Мин.</span>
										</span>
										<span class="countdown-section">
											<span class="countdown-amount">57</span>
											<span class="countdown-period">Сек.</span>
										</span>
									</span>
								</div>
							</div>
						</article>
					</div>
					
					<div class="main-component">
						<!-- Heading Component-->
						<article class="heading-component">
							<div class="heading-component-inner">
								<h5 class="heading-component-title">Лучшие команды
								</h5><a class="button button-xs button-gray-outline" href="roster.html">Все команды</a>
							</div>
						</article>
						<div class="row row-30">
							<div class="col-md-6">
								<!-- Player Info Modern-->
								<div class="player-info-modern">
									<a class="player-info-modern-figure" href="player-page.html">
										<img src="{{ asset('one/images/player-1-368x286.png') }} " alt="" width="368" height="286">
									</a>
									<div class="player-info-modern-footer">
										<div class="player-info-modern-number">
											<p>05</p>
										</div>
										<div class="player-info-modern-content">
											<div class="player-info-modern-title">
												<h5><a href="player-page.html">Nexus</a></h5>
												<p>Germany</p>
											</div>
											<div class="player-info-modern-progress">
												<!-- Linear progress bar-->
												<article class="progress-linear progress-bar-modern animated-first">
													<div class="progress-header">
														<p>Pass Acc</p>
													</div>
													<div class="progress-bar-linear-wrap">
														<div class="progress-bar-linear" style="width: 80%;"></div>
													</div>
													<span class="progress-value">80</span>
												</article>
												<!-- Linear progress bar-->
												<article class="progress-linear progress-bar-modern animated-first">
													<div class="progress-header">
														<p>Shots Acc</p>
													</div>
													<div class="progress-bar-linear-wrap">
														<div class="progress-bar-linear" style="width: 60%;"></div>
													</div>
													<span class="progress-value">60</span>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Player Info Modern-->
								<div class="player-info-modern">
									<a class="player-info-modern-figure" href="player-page.html">
										<img src="{{ asset('one/images/player-2-368x286.png') }} " alt="" width="368" height="286">
									</a>
									<div class="player-info-modern-footer">
										<div class="player-info-modern-number">
											<p>21</p>
										</div>
										<div class="player-info-modern-content">
											<div class="player-info-modern-title">
												<h5><a href="player-page.html">AGO</a></h5>
												<p>USA</p>
											</div>
											<div class="player-info-modern-progress">
												<!-- Linear progress bar-->
												<article class="progress-linear progress-bar-modern animated-first">
													<div class="progress-header">
														<p>Pass Acc</p>
													</div>
													<div class="progress-bar-linear-wrap">
														<div class="progress-bar-linear" style="width: 95%;"></div>
													</div>
													<span class="progress-value">95</span>
												</article>
												<!-- Linear progress bar-->
												<article class="progress-linear progress-bar-modern animated-first">
													<div class="progress-header">
														<p>Shots Acc</p>
													</div>
													<div class="progress-bar-linear-wrap">
														<div class="progress-bar-linear" style="width: 70%;"></div>
													</div>
													<span class="progress-value">70</span>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Aside Block-->
				<div class="col-lg-4">
					<aside class="aside-components">
						<div class="aside-component">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Последние результаты матчей
									</h5>
								</div>
							</article>
							<!-- Game Result Classic-->
							<article class="game-result game-result-classic">
								<div class="game-result-main">
									<div class="game-result-team game-result-team-first">
										<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/AGO.png') }} " alt="" width="55" height="55">
										</figure>
										<div class="game-result-team-name">AGO</div>
										<div class="game-result-team-country">87% x1.14</div>
									</div>
									<div class="game-result-middle">
										<div class="game-result-score-wrap">
											<div class="game-result-score game-result-team-win">2<span class="game-result-team-label game-result-team-label-top">Победа</span>
											</div>
											<div class="game-result-score-divider">
												<svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                                 <g>
	                                 <circle cx="3.5" cy="3.5" r="3"></circle>
	                                 <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                                 </g>
													<g>
														<circle cx="3.695" cy="17.5" r="3"></circle>
														<path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
													</g>
                        </svg>
											</div>
											<div class="game-result-score">1
											</div>
										</div>
										<div class="game-results-status">BO1</div>
									</div>
									<div class="game-result-team game-result-team-second">
										<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/Berzerk.png') }} " alt="" width="41" height="59">
										</figure>
										<div class="game-result-team-name">Berzerk</div>
										<div class="game-result-team-country">x6.92 13%</div>
									</div>
								</div>
								<div class="game-result-footer">
									<ul class="game-result-details">
										<li>StarSeries iL Season5</li>
										<li>
											<time datetime="2017-04-14">14 апреля 2017</time>
										</li>
									</ul>
								</div>
							</article>
							<!-- Game Result Classic-->
							<article class="game-result game-result-classic">
								<div class="game-result-main">
									<div class="game-result-team game-result-team-first">
										<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/Etherian.png') }} " alt="" width="56" height="52">
										</figure>
										<div class="game-result-team-name">Etherian</div>
										<div class="game-result-team-country">15% x6.14</div>
									</div>
									<div class="game-result-middle">
										<div class="game-result-score-wrap">
											<div class="game-result-score">2
											</div>
											<div class="game-result-score-divider">
												<svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                                    <g>
	                                    <circle cx="3.5" cy="3.5" r="3"></circle>
	                                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z"></path>
                                    </g>
													<g>
														<circle cx="3.695" cy="17.5" r="3"></circle>
														<path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
													</g>
                                 </svg>
											</div>
											<div class="game-result-score game-result-team-win">3<span class="game-result-team-label game-result-team-label-top">Победа</span>
											</div>
										</div>
										<div class="game-results-status">BO1</div>
									</div>
									<div class="game-result-team game-result-team-second">
										<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/eXtatus.png') }} " alt="" width="55" height="55">
										</figure>
										<div class="game-result-team-name">eXtatus</div>
										<div class="game-result-team-country">x1.16 85%</div>
									</div>
								</div>
								<div class="game-result-footer">
									<ul class="game-result-details">
										<li>StarSeries iL Season5</li>
										<li>
											<time datetime="2017-04-14">14 апреля 2017</time>
										</li>
									</ul>
								</div>
							</article>
							<!-- Game Result Classic-->
							<article class="game-result game-result-classic">
								<div class="game-result-main">
									<div class="game-result-team game-result-team-first">
										<figure class="game-result-team-figure game-result-team-figure-big">
											<img src="{{ asset('one/images/FURIA.png') }} " alt="" width="55" height="55">
										</figure>
										<div class="game-result-team-name">FURIA</div>
										<div class="game-result-team-country">80% x1.22</div>
									</div>
									<div class="game-result-middle">
										<div class="game-result-score-wrap">
											<div class="game-result-score game-result-team-win">4<span class="game-result-team-label game-result-team-label-top">Победа</span>
											</div>
											<div class="game-result-score-divider">
												<svg x="0px" y="0px" width="7px" height="21px" viewBox="0 0 7 21" enable-background="new 0 0 7 21" xml:space="preserve">
                                    <g>
	                                    <circle cx="3.5" cy="3.5" r="3"></circle>
	                                    <path d="M3.5,1C4.879,1,6,2.122,6,3.5S4.879,6,3.5,6S1,4.878,1,3.5S2.122,1,3.5,1 M3.5,0C1.567,0,0,1.567,0,3.5S1.567,7,3.5,7      S7,5.433,7,3.5S5.433,0,3.5,0L3.5,0z">
	
	                                    </path>
                                    </g>
													<g>
														<circle cx="3.695" cy="17.5" r="3"></circle>
														<path d="M3.695,15c1.378,0,2.5,1.122,2.5,2.5S5.073,20,3.695,20s-2.5-1.122-2.5-2.5S2.316,15,3.695,15 M3.695,14      c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s3.5-1.567,3.5-3.5S5.628,14,3.695,14L3.695,14z"></path>
													</g>
                                 </svg>
											</div>
											<div class="game-result-score">1
											</div>
										</div>
										<div class="game-results-status">BO1</div>
									</div>
									<div class="game-result-team game-result-team-second">
										<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/TeamOne.png') }} " alt="" width="57" height="46">
										</figure>
										<div class="game-result-team-name">TeamOne</div>
										<div class="game-result-team-country">x4.66 20%</div>
									</div>
								</div>
								<div class="game-result-footer">
									<ul class="game-result-details">
										<li>StarSeries iL Season5</li>
										<li>
											<time datetime="2017-04-14">14 апреля 2017</time>
										</li>
									</ul>
								</div>
							</article>
						</div>
						<div class="aside-component">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Турнирная таблица
									</h5>
									<a class="button button-xs button-gray-outline" href="standings.html">Полная</a>
								</div>
							</article>
							<!-- Table team-->
							<div class="table-custom-responsive">
								<table class="table-custom table-standings table-classic">
									<thead>
									<tr>
										<th colspan="2">Команды</th>
										<th>W</th>
										<th>L</th>
										<th>PTS</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><span>1</span></td>
										<td class="team-inline">
											<div class="team-figure">
												<img src="{{ asset('one/images/AGO.png') }} " alt="" width="37" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">AGO</div>
												<div class="team-country">USA</div>
											</div>
										</td>
										<td>153</td>
										<td>30</td>
										<td>186</td>
									</tr>
									<tr>
										<td><span>2</span></td>
										<td class="team-inline">
											<div class="team-figure">
												<img src="{{ asset('one/images/Berzerk.png') }} " alt="" width="37" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">Berzerk</div>
												<div class="team-country">Spain</div>
											</div>
										</td>
										<td>120</td>
										<td>30</td>
										<td>186</td>
									</tr>
									<tr>
										<td><span>3</span></td>
										<td class="team-inline">
											<div class="team-figure">
												<img src="{{ asset('one/images/Etherian.png') }} " alt="" width="37" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">Etherian</div>
												<div class="team-country">Spain</div>
											</div>
										</td>
										<td>100</td>
										<td>30</td>
										<td>186</td>
									</tr>
									<tr>
										<td><span>4</span></td>
										<td class="team-inline">
											<div class="team-figure"><img src="{{ asset('one/images/eXtatus.png') }} " alt="" width="37" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">eXtatus</div>
												<div class="team-country">Italy</div>
											</div>
										</td>
										<td>98</td>
										<td>30</td>
										<td>186</td>
									</tr>
									<tr>
										<td><span>5</span></td>
										<td class="team-inline">
											<div class="team-figure"><img src="{{ asset('one/images/FURIA.png') }} " alt="" width="36" height="31">
											</div>
											<div class="team-title">
												<div class="team-name">FURIA</div>
												<div class="team-country">Spain</div>
											</div>
										</td>
										<td>98</td>
										<td>30</td>
										<td>186</td>
									</tr>
									<tr>
										<td><span>6</span></td>
										<td class="team-inline">
											<div class="team-figure"><img src="{{ asset('one/images/Nexus.png') }} " alt="" width="39" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">Nexus</div>
												<div class="team-country">Germany</div>
											</div>
										</td>
										<td>98</td>
										<td>30</td>
										<td>186</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="aside-component">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Статистика команд
									</h5>
								</div>
							</article>
							<div class="table-custom-responsive">
								<table class="table-custom table-custom-bordered table-team-statistic">
									<tbody>
									<tr>
										<td>
											<p class="team-statistic-counter">109</p>
											<p class="team-statistic-title">Points Per Game</p>
										</td>
										<td>
											<p class="team-statistic-counter">65</p>
											<p class="team-statistic-title">Rebounds Per Game</p>
										</td>
									</tr>
									<tr>
										<td>
											<p class="team-statistic-counter">23.6</p>
											<p class="team-statistic-title">Assists Per Game</p>
										</td>
										<td>
											<p class="team-statistic-counter">102</p>
											<p class="team-statistic-title">Points Allowed</p>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						
						<div class="aside-component">
							<div class="owl-carousel-outer-navigation">
								<!-- Heading Component-->
								<article class="heading-component">
									<div class="heading-component-inner">
										<h5 class="heading-component-title">Маркет
										</h5>
										<div class="owl-carousel-arrows-outline">
											<div class="owl-nav">
												<button class="owl-arrow owl-arrow-prev"></button>
												<button class="owl-arrow owl-arrow-next"></button>
											</div>
										</div>
									</div>
								</article>
								<!-- Owl Carousel-->
								<div class="owl-carousel owl-loaded" data-items="1" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
									
									<div class="owl-stage-outer">
										<div class="owl-stage" style="transform: translate3d(-759px, 0px, 0px); transition: all 0s ease 0s; width: 2660px;">
											<div class="owl-item cloned" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<!-- Badge-->
														<div class="badge badge-shop">new
														</div>
														<div class="product-figure">
															<img src="{{ asset('one/images/shop/markets.jpg') }} " alt="">
														</div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item">
																		<span>Поделиться</span></li>
																	<li class="product-Поделиться-item">
																		<a class="icon fa fa-facebook" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item">
																		<a class="icon fa fa-instagram" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item">
																		<a class="icon fa fa-twitter" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item">
																		<a class="icon fa fa-google-plus" href="#"></a>
																	</li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title">
															<a href="product-page.html">Покупка-продажа вещей CS:GO</a>
														</h6>
														<div class="product-price">
															<span class="heading-6 product-price-new">от 0.5Р</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											<div class="owl-item cloned" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<div class="product-figure"><img src="{{ asset('one/images/shop/product-small-3.png') }} " alt="">
														</div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span>
																	</li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a>
																	</li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a>
																	</li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-3-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Nike distressed baseball hat</a>
														</h6>
														<div class="product-price"><span class="heading-6 product-price-new">$290</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											<div class="owl-item active" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<!-- Badge-->
														<div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
														</div>
														<div class="product-figure"><img src="{{ asset('one/images/shop/markets.jpg') }} " alt="">
														</div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a></li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-1-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Покупка-продажа вещей CS:GO</a></h6>
														<div class="product-price">
															<span class="product-price-old"></span>
															<span class="heading-6 product-price-new">от 0.5Р</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											<div class="owl-item" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<!-- Badge-->
														<div class="badge badge-shop">new
														</div>
														<div class="product-figure"><img src="{{ asset('one/images/shop/product-small-2.png') }} " alt=""></div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a></li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Nike Air Zoom Pegasus</a></h6>
														<div class="product-price"><span class="heading-6 product-price-new">$290</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											
											<div class="owl-item" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<div class="product-figure"><img src="{{ asset('one/images/shop/product-small-3.png') }} " alt="">
														</div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a></li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-3-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Nike distressed baseball hat</a></h6>
														<div class="product-price"><span class="heading-6 product-price-new">$290</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											
											<div class="owl-item cloned" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<!-- Badge-->
														<div class="badge badge-red">hot<span class="icon material-icons-whatshot"></span>
														</div>
														<div class="product-figure"><img src="{{ asset('one/images/shop/product-small-1.png') }} " alt="">
														</div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a></li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-1-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Nike hoops elite backpack</a></h6>
														<div class="product-price"><span class="product-price-old">$400</span><span class="heading-6 product-price-new">$290</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
											
											
											<div class="owl-item cloned" style="width: 349.983px; margin-right: 30px;">
												<article class="product">
													<header class="product-header">
														<!-- Badge-->
														<div class="badge badge-shop">new
														</div>
														<div class="product-figure"><img src="{{ asset('one/images/shop/product-small-2.png') }} " alt=""></div>
														<div class="product-buttons">
															<div class="product-button product-button-Поделиться fl-bigmug-line-Поделиться27" style="font-size: 22px;">
																<ul class="product-Поделиться">
																	<li class="product-Поделиться-item"><span>Поделиться</span></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-facebook" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-instagram" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-twitter" href="#"></a></li>
																	<li class="product-Поделиться-item"><a class="icon fa fa-google-plus" href="#"></a></li>
																</ul>
															</div>
															<a class="product-button fl-bigmug-line-shopping202" href="shopping-cart.html" style="font-size: 26px;"></a>
															<a class="product-button fl-bigmug-line-zoom60" href="images/shop/product-2-original.jpg" data-lightgallery="item" style="font-size: 25px;"></a>
														</div>
													</header>
													<footer class="product-content">
														<h6 class="product-title"><a href="product-page.html">Nike Air Zoom Pegasus</a></h6>
														<div class="product-price"><span class="heading-6 product-price-new">$290</span>
														</div>
														<ul class="product-rating">
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star"></span></li>
															<li><span class="material-icons-star_half"></span></li>
														</ul>
													</footer>
												</article>
											</div>
										
										</div>
									</div>
									
									<div class="owl-nav">
										<div class="owl-prev"></div>
										<div class="owl-next"></div></div>
									<div class="owl-dots disabled"></div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
@endsection