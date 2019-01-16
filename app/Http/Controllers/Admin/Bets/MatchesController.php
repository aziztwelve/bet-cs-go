<?php

namespace App\Http\Controllers\Admin\Bets;

use App\Http\Requests\MatchRequest;
use App\Models\Bets\Match;
use App\Models\Bets\Team;
use App\Models\Bets\Tourney;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class MatchesController
 * @package App\Http\Controllers\Admin\Bets
 */
class MatchesController extends Controller{
	
	
	/**
	 * Show the application admin matches.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getMatches(){
		$matches = Match::with( 'tourney', 'teamOne', 'teamSecond')->get();
//		dd($matches);
		return view('admin.matches.matches', ['matches'=>$matches]);
	}
	
	
	/**
	 * Show the application admin match.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getAddMatch(){
		$teams = Team::all();
		$tourneys = Tourney::all();
		return view('admin.matches.add_match', ['teams'=>$teams, 'tourneys'=>$tourneys]);
	}
	
	
	/**
	 * add new Match
	 * @param MatchRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function postAddMatch(MatchRequest $request){
		$match_add = new Match();
		
		$match_add->id_team_first = $request->get('id_team_first');
		$match_add->id_team_second = $request->get('id_team_second');
		$match_add->id_tourney = $request->get('id_tourney');
//		$match_add->score_team_first = $request->get('score_team_first');
//		$match_add->score_team_second = $request->get('score_team_second');
		$match_add->code_status = $request->get('code_status');
		$match_add->started_at = $request->get('started_at');
		$match_add->bets_amount_team_first = $request->get('bets_amount_team_first');
		$match_add->bets_amount_team_second = $request->get('bets_amount_team_second');
		
		$bets_team1 = $request->get('bets_amount_team_first');
		$bets_team2 = $request->get('bets_amount_team_second');
		$sum = $bets_team1 +  $bets_team2 ;
		
		if ($sum != 0){
			$percent_team1 = $bets_team1  /  $sum  * 100 ;
			$percent_team2 =  $bets_team2  / $sum * 100;
		} else{
			$percent_team1 = 50;
			$percent_team2 = 50;
		}
		
		$factor_team1 = 100 / $percent_team1;
		$factor_team2 = 100 / $percent_team2;
		
		$match_add->win_percent_team_first = $percent_team1 ;
		$match_add->win_percent_team_second = $percent_team2 ;
		$match_add->win_factor_team_first = $factor_team1 ;
		$match_add->win_factor_team_second = $factor_team2 ;
		
		$match_add->save();
		
		return redirect('admin/matches')->with('success', 'Матч добавлен');
	}
	
	
	/**
	 * getting match
	 *
	 * @return mixed
	 */
	public function getEditMatch($id){
		$match = Match::find($id);
		$tourney_match = Match::find($id)->tourney;
		$teamOne = Match::find($id)->teamOne;
		$teamSecond = Match::find($id)->teamSecond;
		$tourneys = Tourney::all();
		$teams = Team::all();
		
		return view('admin.matches.edit_match', [
			'match'=>$match,
			'tourney_match'=>$tourney_match,
			'teamOne'=>$teamOne,
			'teamSecond'=>$teamSecond,
			'tourneys'=>$tourneys,
			'teams'=>$teams
		]);
	}
	
	
	/**
	 * edit match
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function postEditMatch(Request $request, $id){
		
		$edit_match = Match::find($request->id);
	
		$this->validate(request(), [
				'started_at' => 'required',
				'score_team_first' => 'numeric|integer|min:0',
				'score_team_second' => 'numeric|integer|min:0',
				'bets_amount_team_first' => 'numeric|required|min:0',
				'bets_amount_team_second' => 'numeric|required|min:0'
			]);
		
		$edit_match->id_team_first = $request->get('id_team_first');
		$edit_match->id_team_second = $request->get('id_team_second');
		$edit_match->id_tourney = $request->get('id_tourney');
		$edit_match->score_team_first = $request->get('score_team_first');
		$edit_match->score_team_second = $request->get('score_team_second');
		$edit_match->code_status = $request->get('code_status');
		$edit_match->started_at = $request->get('started_at');
		$edit_match->bets_amount_team_first = $request->get('bets_amount_team_first');
		$edit_match->bets_amount_team_second = $request->get('bets_amount_team_second');
		
		$bets_team1 = $request->get('bets_amount_team_first');
		$bets_team2 = $request->get('bets_amount_team_second');
		$sum = $bets_team1 +  $bets_team2 ;
		
		if ($sum != 0){
			$percent_team1 = $bets_team1  /  $sum  * 100 ;
			$percent_team2 =  $bets_team2  / $sum * 100;
		} else{
			$percent_team1 = 50;
			$percent_team2 = 50;
		}
		
		
		$factor_team1 = 100 / $percent_team1;
		$factor_team2 = 100 / $percent_team2;
		
		$edit_match->win_percent_team_first = $percent_team1 ;
		$edit_match->win_percent_team_second = $percent_team2 ;
		$edit_match->win_factor_team_first = $factor_team1 ;
		$edit_match->win_factor_team_second = $factor_team2 ;
		
		$edit_match->save();
		
		return redirect('admin/matches')->with('success', 'Матч изменен');
	}
	
	
	/**
	 * delete match
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function deleteMatch($id){
		$delete = Match::whereId($id)->firstOrFail();
		$delete->delete();
		
		return redirect('admin/matches')->with('success', 'Матч удален');
	}
}
