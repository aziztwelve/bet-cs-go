<?php

namespace App\Http\Controllers;

use App\Models\Bets\Bet;
use App\Models\Bets\Match;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller {
	
	

		/**
		 * Show the application main content.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function main (){
			
			$dt = Carbon::now('Europe/Moscow');
			$add_dt = Carbon::now('Europe/Moscow' )->addDays(2);
			
			//retrieving upcoming  matches
			$upcoming = Match::with( 'tourney', 'teamOne', 'teamSecond')
				->whereIn('code_status', [1, 4, 5] )
				->where('started_at', '>', $dt)
				->whereBetween('started_at', [$dt, $add_dt])
				->get();
			
			//retrieving current matches
			$current = Match::with( 'tourney', 'teamOne', 'teamSecond')
				->whereIn('code_status', [2] )
				->get();
			
			//retrieving past matches
			$past = Match::with( 'tourney', 'teamOne', 'teamSecond')
				->whereIn('code_status', [3, 4, 5] )
				->where('started_at', '<', $dt)
				->take(20)
				->get();
	
			return view('main_content', ['upcoming'=>$upcoming,'current'=>$current,'past'=>$past]);
		}
	
	
		/**
		 * Show the application login|register.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function login (){
			return view('login_page');
		}
	
	
		/**
		 * Show the application schedule.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function bets (){
			return view('schedule');
		}
}
