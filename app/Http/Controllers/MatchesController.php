<?php

namespace App\Http\Controllers;

use App\Models\Bets\Match;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Bets\Team;
use DB;

/**
 * Class MatchesController
 * @package App\Http\Controllers
 */
class MatchesController extends Controller {
	
	
		/**
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function getPast(){
			$dt = Carbon::now();
			$past = Match::with( 'tourney', 'teamOne', 'teamSecond')
				->whereIn('code_status', [3, 4, 5] )
				->where('started_at', '<', $dt)
				->paginate(40);
	
			return view('matches.past_view', ['past'=>$past]);
		}
		
		
		/**
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 *             Upcoming
		 */
		public function getUpcoming(){
			$dt = Carbon::now();
			$upcoming = Match::with( 'tourney', 'teamOne', 'teamSecond')
				->whereIn('code_status', [1, 4, 5] )
				->where('started_at', '>', $dt)
				->paginate(40);
	
			return view('matches.upcoming_view', ['upcoming'=>$upcoming]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 *search upcoming matches
	 */
	public function getUpcomingSearch(Request $request){
			$dt = Carbon::now();
			$searchString    = $request->input('search');

			$search_upcoming = Match::with( 'tourney', 'teamOne', 'teamSecond')

					->where(function ($query) {
						$query->whereIn('code_status', [1, 4, 5] );
					})

					->where('started_at', '>', $dt)

					->where(function ($q) use ($searchString) {
							$q->whereHas('teamOne', function ($query) use ($searchString){
									$query->where('name', 'ilike', '%'.$searchString.'%');

				    				});
							$q->orWhereHas('teamSecond', function($query) use ($searchString) { 
                                    $query->where('name', 'ilike', '%'.$searchString.'%');
                    		});
							$q->orWhereHas('tourney', function($query) use ($searchString) { 
                                    $query->where('name', 'ilike', '%'.$searchString.'%');
                    		});
					})
				    ->paginate(40);


				return view('matches.upcoming_search', ['search_upcoming'=>$search_upcoming]);
		}
	
	/**
	 * @param Request $request
	 *
	 *search past matches
	 */
	public function getPastSearch(Request $request){
			$dt = Carbon::now();
			$searchString    = $request->input('search');

			$search_past = Match::with( 'tourney', 'teamOne', 'teamSecond')

					->where(function ($query) {
						$query->whereIn('code_status', [3, 4, 5] );
					})

					->where('started_at', '<', $dt)

					->where(function ($q) use ($searchString) {
							$q->whereHas('teamOne', function ($query) use ($searchString){
									$query->where('name', 'ilike', '%'.$searchString.'%');

				    				});
							$q->orWhereHas('teamSecond', function($query) use ($searchString) { 
                                    $query->where('name', 'ilike', '%'.$searchString.'%');
                    		});
							$q->orWhereHas('tourney', function($query) use ($searchString) { 
                                    $query->where('name', 'ilike', '%'.$searchString.'%');
                    		});
					})
				    ->paginate(40);


				return view('matches.past_search', ['search_past'=>$search_past]);
		}



}
