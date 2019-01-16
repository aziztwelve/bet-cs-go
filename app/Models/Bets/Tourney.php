<?php

namespace App\Models\Bets;

use App\Models\Setting\Log;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tourney
 * @package App\Models\Bets
 *
 *  @property  int  $id
 *  @property  int  $id_main_tourney
 *  @property  int  $id_game
 *  @property  string  $name
 *  @property  string  $description
 *  @property  string  $location
 *  @property  string  $format
 *  @property  string  $logo
 *  @property  int  $fund
 *  @property  int  $code_status
 *  @property  string  $started_at
 *  @property  string  $finished_at
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class Tourney extends Model {
	
	
	protected $table = 'tournirs';
	
	// Будущий
	const STATUS_FUTURE  = 1;
	// Активный
	const STATUS_ACTIVE  = 2;
	// Прошедший
	const STATUS_PAST  = 3;

	

	/**
	 * Get the matches for the blog tourney.
	 */
	public function matches(){
		return $this->hasMany(Match::class, 'id_tourney');
	}
	
	
	/**
	 * Get the country for the blog team.
	 */
	public function game(){
		return $this->belongsTo(Game::class, 'id_game');
	}
	
	
}
