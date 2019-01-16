<?php

namespace App\Http\Controllers;

use App\Models\Bets\Tourney;

class TourneyController extends Controller{
	
	public function getTourney($id){
		$tourney = Tourney::find($id);
		$game = Tourney::find($id)->game;
		
		return view('tourneys.tourney', ['tourney'=>$tourney, 'game'=>$game]);
	}
}
