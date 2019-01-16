<?php

namespace App\Http\Controllers\Admin\Matches;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Class MatchesController
 * @package App\Http\Controllers\Admin\Matches
 */
class MatchesController extends Controller {
	
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getPast(){
			$past = DB::table('bets')
				->where('status', '=', 'Закончен')
				->where(function ($query) {
					$query->where('result', '=', 'Отменен')
					->orWhere('result', '=', 'Счет')
					->orWhere('result', '=', 'Перенесен');
				})
			->paginate(5);
			
			return view('admin.matches.past_view', ['past'=>$past]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getPastBetween(Request $request){
	
			$from = $request->from;
			$to = $request->to;
			$count = $request->count;
			
			
			$past = DB::table('bets')
				->where('status', '=', 'Закончен')
				->where(function ($query) {
				$query->where('result', '=', 'Отменен')
					->orWhere('result', '=', 'Счет')
					->orWhere('result', '=', 'Перенесен');
				})
				->whereBetween('date', [$from, $to])
				->take($count)
				->get();
			
			return view('admin.matches.past_between', ['past'=>$past]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getPastTake(Request $request){
	
			$count = $request->count;
			
			
			$past = DB::table('bets')
				->where('status', '=', 'Закончен')
				->where(function ($query) {
				$query->where('result', '=', 'Отменен')
					->orWhere('result', '=', 'Счет')
					->orWhere('result', '=', 'Перенесен');
				})
				->take($count)
				->get();
			
			return view('admin.matches.past_take', ['past'=>$past]);
		}
	
	
	/**
	 * Upcoming
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getUpcoming(){
	
			$upcoming = DB::table('bets')
				->where('result', '=', 'Ожидание')
				->where('status', '=', 'Ожидание')
				->paginate(4);
	
			return view('admin.matches.upcoming_view', ['upcoming'=>$upcoming]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getUpcomingBetween(Request $request){
	
			$from = $request->from;
			$to = $request->to;
			$count = $request->count;
	
			$upcoming = DB::table('bets')
				->where('result', '=', 'Ожидание')
				->where('status', '=', 'Ожидание')
				->whereBetween('date', [$from, $to])
				->take($count)
				->get();
	
			return view('admin.matches.upcoming_between', ['upcoming'=>$upcoming]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getUpcomingTake(Request $request){
	
			$count = $request->count;
	
			
			$upcoming = DB::table('bets')
				->where('result', '=', 'Ожидание')
				->where('status', '=', 'Ожидание')
				->take($count)
				->get();
			
			return view('admin.matches.upcoming_take', ['upcoming'=>$upcoming]);
		}
	
	
	/**
	 * Current
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getCurrent(){
	
			$current = DB::table('bets')
				->where('result', '=', 'Счет')
				->where('status', '=', 'Live')
				->paginate(4);
	
			return view('admin.matches.current_view', ['current'=>$current]);
		}
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getCurrentBetween(Request $request){
	
			$from = $request->from;
			$to = $request->to;
			$count = $request->count;
			
			
			$current = DB::table('bets')
				->where('result', '=', 'Счет')
				->where('status', '=', 'Live')
				->whereBetween('date', [$from, $to])
				->take($count)
				->get();
	
			return view('admin.matches.current_between', ['current'=>$current]);
		 }
	
	
	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getCurrentTake(Request $request){
		
			$count = $request->count;
			
			
			$current = DB::table('bets')
				->where('result', '=', 'Счет')
				->where('status', '=', 'Live')
				->take($count)
				->get();
	
			return view('admin.matches.current_take', ['current'=>$current]);
		}

}
