<?php

namespace App\Models\Balance;

use App\Models\Bets\Bet;
use App\Models\Setting\Log;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Balance
 * @package App\Models\Balance
 *
 * @property  int  $id
 *  @property  string  $date_change
 *  @property  int  $percent
 *  @property  int  $log_id
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class Balance extends Model {
	

			 /**
			 * Get the logs for the blog balance.
			 */
			public function logs(){
				return $this->hasMany(Log::class);
			}
			
			
			 /**
			 * Get the bets for the blog balance.
			 */
			public function bets(){
				return $this->hasMany(Bet::class);
			}
}
