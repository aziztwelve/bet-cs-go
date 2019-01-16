<?php

namespace App\Models\Admin;

use App\Models\Bets\Bet;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commision
 * @package App\Models\Admin
 *
 * @property  int  $id
 *  @property  string  $date_transaction
 *  @property  int  $bet_id
 *  @property  int  $sum_from_bet
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class Commision extends Model {
    

			 /**
			 * Get the bets for the blog commision.
			 */
			public function bet() {
				return $this->hasOne(Bet::class);
			}

}
