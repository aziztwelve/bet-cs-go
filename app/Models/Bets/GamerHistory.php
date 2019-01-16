<?php

namespace App\Models\Bets;

use App\Models\Setting\Log;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GamerHistory
 * @package App\Models\Bets
 *
 * @property  int  $id
 *  @property  int  $gamer_id
 *  @property  int  $team_id
 *  @property  int  $log_id
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class GamerHistory extends Model{

	
		/**
		 * Get the logs for the blog gamer history.
		 */
		public function logs(){
			return $this->hasMany(Log::class);
		}
		
		
		/**
		 * Get the team the blog gamer history.
		 */
		public function team(){
			return $this->belongsTo(Team::class);
		}

}
