<?php

namespace App\Http\Controllers;

use App\Models\Bets\Team;

/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends Controller{
	
	
	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getTeam($id){
		$team = Team::find($id);
		$country = Team::find($id)->country;
		
		return view('teams.team', ['team'=>$team, 'country'=>$country]);
	}
}
