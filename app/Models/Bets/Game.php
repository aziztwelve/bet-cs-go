<?php

namespace App\Models\Bets;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 * @package App\Models\Bets
 */
class Game extends Model{
	
	/**
	 * Get the matchOne for the blog team.
	 */
	public function tourneys(){
		return $this->hasMany(Tourney::class, 'id_game');
	}
	
}
