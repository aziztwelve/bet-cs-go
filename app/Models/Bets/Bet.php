<?php

namespace App\Models\Bets;

use App\Models\Admin\Commision;
use App\Models\Balance\Balance;
use App\Models\Setting\Log;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Bet
 * @package App\Models\Bets
 *
 *  @property  int  $id
 *  @property  string  $date
 *  @property  int  $match_id
 *  @property  int  $user_id
 *  @property  int  $bet_kind
 *  @property  int  $bet_status
 *  @property  int  $bet_sum
 *  @property  int  $team_id
 *  @property  int  $log_id
 *  @property  string  $result
 *  @property  string  $status
 * @property  string  $created_at
 * @property  string  $updated_at
 */
class Bet extends Model {
	
	
		//kind bet
		const BET_SINGLE = 1;
		const BET_EXPESS = 2;
		
		
		//status
		const BET_DONE = 1;
		const BET_CANCELED = 2;
		const BET_WON = 3;
		const BET_LOST = 4;
		
		
		/**
		 * @var array
		 */
		protected $fillable = [
			'date', 'match_id', 'user_id', 'bet_kind', 'bet_status', 'bet_sum', 'team_id', 'log_id', 'result','status',
		];
		
		
		/**
		* @return bool
		*/
		public function isSingleBet() {
			return $this->bet_kind  === self::BET_SINGLE;
		}
	
	
		/**
		* @return bool
		*/
		public function isExpressBet() {
			return $this->bet_kind  === self::BET_EXPESS;
		}
		
		
		/**
		* @return bool
		*/
		public function isDoneBet() {
			return $this->bet_status  === self::BET_DONE;
		}
		
		
		/**
		* @return bool
		*/
		public function isCanceledBet() {
			return $this->bet_status  === self::BET_CANCELED;
		}
	
	
		/**
		* @return bool
		*/
		public function isWonBet() {
			return $this->bet_status  === self::BET_WON;
		}
	
	
		/**
		* @return bool
		*/
		public function isLostBet() {
			return $this->bet_status  === self::BET_LOST;
		}
		
		
		 /**
		 * Get the logs for the blog bet.
		 */
		public function logs(){
			return $this->hasMany(Log::class);
		}
		
		
		/**
		 * Get the match history that owns the bet.
		 */
		public function matchHistory(){
			return $this->belongsTo(MatchHistory::class);
		}
		
		
		/**
		 * Get the user that owns the bet.
		 */
		public function user(){
			return $this->belongsTo(User::class);
		}
		
		
		/**
		 * Get the user that owns the bet.
		 */
		public function team(){
			return $this->belongsTo(Team::class);
		}
		
		
		/**
		 * Get the user that owns the bet.
		 */
		public function balance(){
			return $this->belongsTo(Balance::class);
		}
		
		
		/**
		 * Get the user that owns the bet.
		 */
		public function commision(){
			return $this->belongsTo(Commision::class);
		}

}
