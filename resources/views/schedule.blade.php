@extends('layouts.main_page')


@section('content')
	
	<section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{  asset('one/images/bg-breadcrumbs-1.jpg') }} "><div class="material-parallax parallax"><img src="{{ asset('one/images/bg-breadcrumbs-1.jpg') }} " alt="" style="display: block; transform: translate3d(-50%, 130px, 0px);"></div>
		<div class="parallax-content breadcrumbs-custom context-dark">
			<div class="container">
				<h3 class="breadcrumbs-custom-title">Game schedule</h3>
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Team</a></li>
					<li class="active">Game schedule</li>
				</ul>
			</div>
		</div>
	</section>
	
	
	

	
	
	
	<section class="section section-sm bg-gray-100">
		<div class="container">
			<div class="row row-50">
				<div class="col-lg-8">
					<!-- Heading Component-->
					<article class="heading-component">
						<div class="heading-component-inner">
							<h5 class="heading-component-title">Game schedule
							</h5>
							<div class="heading-component-aside">
								<ul class="list-inline list-inline-xs list-inline-middle">
									<li>
										<div class="select2-container select select-minimal" id="s2id_autogen3" style="min-width: 170px;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">All Competitions</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4" type="text"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="" type="text">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" style="min-width: 170px; display: none;" tabindex="-1" title="">
											<option value="All Competitions" selected="">All Competitions</option>
											<option value="Champions League">Champions League</option>
										</select>
									</li>
									<li>
										<div class="select2-container select select-minimal" id="s2id_autogen5"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">May</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6" type="text"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen6_search" class="select2-offscreen"></label>       <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="" type="text">   </div>   <ul class="select2-results" role="listbox" id="select2-results-6">   </ul></div></div><select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" tabindex="-1" title="" style="display: none;">
											<option value="may" selected="">May</option>
											<option value="april">April</option>
											<option value="march">March </option>
										</select>
									</li>
									<li>
										<div class="select2-container select select-minimal" id="s2id_autogen7"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">2016-2017</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8" type="text"><div class="select2-drop select2-display-none select-minimal-dropdown">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen8_search" class="select2-offscreen"></label>       <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="" type="text">   </div>   <ul class="select2-results" role="listbox" id="select2-results-8">   </ul></div></div><select class="select select-minimal" data-placeholder="Select an option" data-dropdown-class="select-minimal-dropdown" tabindex="-1" title="" style="display: none;">
											<option value="2016-2017" selected="">2016-2017</option>
											<option value="2015-2016">2015-2016</option>
											<option value="2014-2015">2014-2015</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
					</article>
					
					<!-- Game Result Bug-->
					<article class="game-result">
						<div class="game-info">
							<p class="game-info-subtitle">New Yorkers Stadium -
								<time datetime="08:30"> 08:30 PM</time>
							</p>
							<h3 class="game-info-title">European soccer cup: day 38</h3>
							<div class="game-info-main">
								<div class="game-info-team game-info-team-first">
									<figure><img src="{{ asset('one/images/team-atletico-100x100.png') }} " alt="" width="100" height="100">
									</figure>
									<div class="game-result-team-name">Atletico</div>
									<div class="game-result-team-country">USA</div>
								</div>
								<div class="game-info-middle game-info-middle-vertical">
									<time class="time-big" datetime="2017-04-17"><span class="heading-3">Fri 19</span> May 2017
									</time>
									<div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
									<div class="group-sm">
										<div class="button button-sm button-share-outline">Share
											<ul class="game-info-share">
												<li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
											</ul>
										</div><a class="button button-sm button-primary" href="#">Buy tickets</a>
									</div>
								</div>
								<div class="game-info-team game-info-team-second">
									<figure><img src="{{ asset('one/images/team-real-madrid-75x106.png') }} " alt="" width="75" height="106">
									</figure>
									<div class="game-result-team-name">Real Madrid</div>
									<div class="game-result-team-country">Spain</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Game Result Bug-->
					<article class="game-result">
						<div class="game-info">
							<p class="game-info-subtitle">Bavaria Stadium -
								<time datetime="08:30"> 08:30 PM</time>
							</p>
							<h3 class="game-info-title">Copa del Rey Final</h3>
							<div class="game-info-main">
								<div class="game-info-team game-info-team-first">
									<figure><img src="{{ asset('one/images/team-bavaria-fc-113x106.png') }} " alt="" width="113" height="106">
									</figure>
									<div class="game-result-team-name">Bavaria FC</div>
									<div class="game-result-team-country">Germany</div>
								</div>
								<div class="game-info-middle game-info-middle-vertical">
									<time class="time-big" datetime="2017-04-17"><span class="heading-3">Sun 21</span> May 2017
									</time>
									<div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
									<div class="group-sm">
										<div class="button button-sm button-share-outline">Share
											<ul class="game-info-share">
												<li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
											</ul>
										</div><a class="button button-sm button-primary" href="#">Buy tickets</a>
									</div>
								</div>
								<div class="game-info-team game-info-team-second">
									<figure><img src="{{ asset('one/images/team-atletico-100x100.png') }} " alt="" width="100" height="100">
									</figure>
									<div class="game-result-team-name">Atletico</div>
									<div class="game-result-team-country">USA</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Game Result Bug-->
					<article class="game-result">
						<div class="game-info">
							<p class="game-info-subtitle">New Yorkers Stadium -
								<time datetime="08:30"> 08:30 PM</time>
							</p>
							<h3 class="game-info-title">Semi-Final (FINAL FOUR)</h3>
							<div class="game-info-main">
								<div class="game-info-team game-info-team-first">
									<figure><img src="{{ asset('one/images/team-atletico-100x100.png') }} " alt="" width="100" height="100">
									</figure>
									<div class="game-result-team-name">Atletico</div>
									<div class="game-result-team-country">USA</div>
								</div>
								<div class="game-info-middle game-info-middle-vertical">
									<time class="time-big" datetime="2017-04-17"><span class="heading-3">Wed 24</span> May 2017
									</time>
									<div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
									<div class="group-sm">
										<div class="button button-sm button-share-outline">Share
											<ul class="game-info-share">
												<li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
											</ul>
										</div><a class="button button-sm button-primary" href="#">Buy tickets</a>
									</div>
								</div>
								<div class="game-info-team game-info-team-second">
									<figure><img src="{{ asset('one/images/team-barcelona-119x102.png') }} " alt="" width="119" height="102">
									</figure>
									<div class="game-result-team-name">Barcelona</div>
									<div class="game-result-team-country">Spain</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Game Result Bug-->
					<article class="game-result">
						<div class="game-info">
							<p class="game-info-subtitle">Sevilla Stadium -
								<time datetime="08:30"> 08:30 PM</time>
							</p>
							<h3 class="game-info-title">Champions League</h3>
							<div class="game-info-main">
								<div class="game-info-team game-info-team-first">
									<figure><img src="{{ asset('one/images/team-sevilla-123x99.png') }} " alt="" width="123" height="99">
									</figure>
									<div class="game-result-team-name">Sevilla</div>
									<div class="game-result-team-country">Spain</div>
								</div>
								<div class="game-info-middle game-info-middle-vertical">
									<time class="time-big" datetime="2017-04-17"><span class="heading-3">Sun 29</span> May 2017
									</time>
									<div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
									<div class="group-sm">
										<div class="button button-sm button-share-outline">Share
											<ul class="game-info-share">
												<li class="game-info-share-item"><a class="icon fa fa-facebook" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-twitter" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-google-plus" href="#"></a></li>
												<li class="game-info-share-item"><a class="icon fa fa-instagram" href="#"></a></li>
											</ul>
										</div><a class="button button-sm button-primary" href="#">Buy tickets</a>
									</div>
								</div>
								<div class="game-info-team game-info-team-second">
									<figure><img src="{{ asset('one/images/team-atletico-100x100.png') }} " alt="" width="100" height="100">
									</figure>
									<div class="game-result-team-name">Atletico</div>
									<div class="game-result-team-country">USA</div>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="col-lg-4">
					<div class="row row-30">
						<div class="col-md-6 col-lg-12">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Standings
									</h5><a class="button button-xs button-gray-outline" href="standings.html">Full Standings</a>
								</div>
							</article>
							
							<!-- Table team-->
							<div class="table-custom-responsive">
								<table class="table-custom table-standings table-classic">
									<thead>
									<tr>
										<th colspan="2">Team Position</th>
										<th>W</th>
										<th>L</th>
										<th>PTS</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><span>1</span></td>
										<td class="team-inline">
											<div class="team-figure"><img src="{{ asset('one/images/team-atletico-37x37.png') }} " alt="" width="37" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">Atletico</div>
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
											<div class="team-figure"><img src="{{ asset('one/images/team-sevilla-45x35.png') }} " alt="" width="45" height="35">
											</div>
											<div class="team-title">
												<div class="team-name">Sevilla</div>
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
											<div class="team-figure"><img src="{{ asset('one/images/team-real-madrid-29x43.png') }} " alt="" width="29" height="43">
											</div>
											<div class="team-title">
												<div class="team-name">Real Madrid</div>
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
											<div class="team-figure"><img src="{{ asset('one/images/team-celta-vigo-37x34.png') }} " alt="" width="37" height="34">
											</div>
											<div class="team-title">
												<div class="team-name">Celta Vigo</div>
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
											<div class="team-figure"><img src="{{ asset('one/images/team-barcelona-36x31.png') }} " alt="" width="36" height="31">
											</div>
											<div class="team-title">
												<div class="team-name">Barcelona</div>
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
											<div class="team-figure"><img src="{{ asset('one/images/team-bavaria-fc-39x37.png') }} " alt="" width="39" height="37">
											</div>
											<div class="team-title">
												<div class="team-name">Bavaria FC</div>
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
						<div class="col-md-6 col-lg-12">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Player of the month
									</h5>
								</div>
							</article>
							
							<!-- Player Info Minimal-->
							<div class="player-info-minimal">
								<div class="player-info-minimal-figure"><img src="{{ asset('one/images/player-3-229x268.png') }} " alt="" width="229" height="268">
								</div>
								<div class="player-info-minimal-number">
									<p>21</p>
								</div>
								<div class="player-info-minimal-content">
									<div class="player-info-minimal-title">
										<h3>Jack<span>Windsor</span></h3>
									</div>
									<div class="player-info-minimal-progress">
										<!-- Linear progress bar-->
										<article class="progress-linear progress-bar-modern animated-first">
											<div class="progress-header">
												<p>Pass Acc</p><span class="progress-value">87</span>
											</div>
											<div class="progress-bar-linear-wrap">
												<div class="progress-bar-linear" style="width: 87%;"></div>
											</div>
										</article>
										<!-- Linear progress bar-->
										<article class="progress-linear progress-bar-modern animated-first">
											<div class="progress-header">
												<p>Shots Acc</p><span class="progress-value">93</span>
											</div>
											<div class="progress-bar-linear-wrap">
												<div class="progress-bar-linear" style="width: 93%;"></div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-12 owl-carousel-outer-navigation">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Latest Game results
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
							<div class="owl-carousel owl-loaded" data-items="1" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-nav-custom=".owl-carousel-outer-navigation">
								<!-- Game Result Classic-->
								
								<!-- Game Result Classic-->
								
								<!-- Game Result Classic-->
								
								<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1050px;"><div class="owl-item active" style="width: 349.983px;"><article class="game-result game-result-classic">
												<div class="game-result-main">
													<div class="game-result-team game-result-team-first">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-atletico-55x55.png') }} " alt="" width="55" height="55">
														</figure>
														<div class="game-result-team-name">Atletico</div>
														<div class="game-result-team-country">USA</div>
													</div>
													<div class="game-result-middle">
														<div class="game-result-score-wrap">
															<div class="game-result-score game-result-team-win">2<span class="game-result-team-label game-result-team-label-top">Win</span>
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
														<div class="game-results-status">Home</div>
													</div>
													<div class="game-result-team game-result-team-second">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-real-madrid-41x59.png') }} " alt="" width="41" height="59">
														</figure>
														<div class="game-result-team-name">Real madrid</div>
														<div class="game-result-team-country">Spain</div>
													</div>
												</div>
												<div class="game-result-footer">
													<ul class="game-result-details">
														<li>New Yorkers Stadium</li>
														<li>
															<time datetime="2017-04-14">April 14, 2017</time>
														</li>
													</ul>
												</div>
											</article></div><div class="owl-item" style="width: 349.983px;"><article class="game-result game-result-classic">
												<div class="game-result-main">
													<div class="game-result-team game-result-team-first">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-bavaria-fc-56x52.png') }} " alt="" width="56" height="52">
														</figure>
														<div class="game-result-team-name">Bavaria FC</div>
														<div class="game-result-team-country">Germany</div>
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
															<div class="game-result-score game-result-team-win">3<span class="game-result-team-label game-result-team-label-top">Win</span>
															</div>
														</div>
														<div class="game-results-status">Away</div>
													</div>
													<div class="game-result-team game-result-team-second">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-atletico-55x55.png') }} " alt="" width="55" height="55">
														</figure>
														<div class="game-result-team-name">Atletico</div>
														<div class="game-result-team-country">USA</div>
													</div>
												</div>
												<div class="game-result-footer">
													<ul class="game-result-details">
														<li>Bavaria Stadium</li>
														<li>
															<time datetime="2017-04-14">April 14, 2017</time>
														</li>
													</ul>
												</div>
											</article></div><div class="owl-item" style="width: 349.983px;"><article class="game-result game-result-classic">
												<div class="game-result-main">
													<div class="game-result-team game-result-team-first">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-atletico-55x55.png') }} " alt="" width="55" height="55">
														</figure>
														<div class="game-result-team-name">Atletico</div>
														<div class="game-result-team-country">USA</div>
													</div>
													<div class="game-result-middle">
														<div class="game-result-score-wrap">
															<div class="game-result-score game-result-team-win">4<span class="game-result-team-label game-result-team-label-top">Win</span>
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
														<div class="game-results-status">Home</div>
													</div>
													<div class="game-result-team game-result-team-second">
														<figure class="game-result-team-figure game-result-team-figure-big"><img src="{{ asset('one/images/team-sevilla-57x46.png') }} " alt="" width="57" height="46">
														</figure>
														<div class="game-result-team-name">Sevilla</div>
														<div class="game-result-team-country">Spain</div>
													</div>
												</div>
												<div class="game-result-footer">
													<ul class="game-result-details">
														<li>New Yorkers Stadium</li>
														<li>
															<time datetime="2017-04-14">April 14, 2017</time>
														</li>
													</ul>
												</div>
											</article></div></div></div><div class="owl-nav"><div class="owl-prev disabled"></div><div class="owl-next"></div></div><div class="owl-dots disabled"></div></div>
						</div>
						<div class="col-md-6 col-lg-12">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Follow Us
									</h5>
								</div>
							</article>
							
							<!-- Buttons Media-->
							<div class="group-sm group-flex"><a class="button-media button-media-facebook" href="#">
									<h4 class="button-media-title">50k</h4>
									<p class="button-media-action">Like<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-facebook"></span></a><a class="button-media button-media-twitter" href="#">
									<h4 class="button-media-title">120k</h4>
									<p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-twitter"></span></a><a class="button-media button-media-google" href="#">
									<h4 class="button-media-title">15k</h4>
									<p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-google"></span></a><a class="button-media button-media-instagram" href="#">
									<h4 class="button-media-title">85k</h4>
									<p class="button-media-action">Follow<span class="icon material-icons-add_circle_outline icon-sm"></span></p><span class="button-media-icon fa-instagram"></span></a></div>
						</div>
						<div class="col-md-6 col-lg-12">
							<!-- Heading Component-->
							<article class="heading-component">
								<div class="heading-component-inner">
									<h5 class="heading-component-title">Gallery
									</h5>
								</div>
							</article>
							
							<article class="instafeed" data-instafeed-tagname="tm_63853_football" data-instafeed-get="tagged" data-instafeed-sort="least-liked" data-lightgallery="group">
								<div class="row row-10 row-narrow">
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/920f2247f4ba31ec19081c7193560716/5B60FAD0/t51.2885-15/s640x640/sh0.08/e35/21480085_1618930664797383_1913910776549081088_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/f8fb6f8c5fca08b0643fbcf167a05de4/5B680EC1/t51.2885-15/s150x150/e15/21480085_1618930664797383_1913910776549081088_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/92542a5c1a072f6461ec99363800f406/5B54226A/t51.2885-15/s640x640/sh0.08/e35/21568673_150711905520712_2006047875271753728_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/3eb8690b84e023119a7b011cd36e1aba/5B57F5EC/t51.2885-15/s150x150/e15/21568673_150711905520712_2006047875271753728_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/be623456836a70a68ec27b9b651b9e09/5B6D9FBB/t51.2885-15/s640x640/sh0.08/e35/21480314_115609609151834_2653927375292596224_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/09a35caf6168cf9db26740d3e53eb90b/5B5FBB3D/t51.2885-15/s150x150/e15/21480314_115609609151834_2653927375292596224_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/43ae31834243ab0219da59fd711be07c/5B56A477/t51.2885-15/s640x640/sh0.08/e35/21479737_472843706431477_5206562929071095808_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/6d733296bcee020e1d52036c8a9b8f66/5B5A47F1/t51.2885-15/s150x150/e15/21479737_472843706431477_5206562929071095808_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/3cf7f2620e2d405119dd6e63eaa3ee22/5B604644/t51.2885-15/s640x640/sh0.08/e35/21436119_473048923066578_5148142032291627008_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/39354c77310f6f1e59b69bc896c35304/5B6219C2/t51.2885-15/s150x150/e15/21436119_473048923066578_5148142032291627008_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
									<div class="col-6 col-sm-4 col-md-6 col-lg-4" data-instafeed-item=""><a class="thumbnail-creative" data-lightgallery="group-item" href="https://scontent.cdninstagram.com/vp/f5e0bc7f4e4b15d7bd420f9edc9fb9a9/5B665227/t51.2885-15/s640x640/sh0.08/e35/21569195_772356829603866_7348995180134924288_n.jpg" data-images-standard_resolution-url="href"><img src="https://scontent.cdninstagram.com/vp/6ed64e71f077a86389593c42663c2fe5/5B5A2CA1/t51.2885-15/s150x150/e15/21569195_772356829603866_7348995180134924288_n.jpg" alt="" data-images-thumbnail-url="src">
											<div class="thumbnail-creative-overlay"></div></a>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
@endsection