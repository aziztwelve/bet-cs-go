<?php

namespace App\Models\Bets;

use App\Models\Setting\Country;
use App\Models\Setting\Log;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 * @package App\Models\Bets
 *
 *   @property  int  $id
 *  @property  int  $id_country
 *  @property  string  $name
 *  @property  string  $logo
 *  @property  string  $date_foundation
 *  @property  string  $site
 *  @property  string  $description
 *  @property  int  $amount_prize
 *  @property  int  $code_status
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class Team extends Model{
	
	
		/**
		 * @var string
		 */
		protected $table = 'teams';


		protected $fillable = [
			'id_country', 'name', 'logo', 'date_foundation', 'site', 'description', 'amount_prize', 'code_status'
		];
		
		
		/**
		 *Активная команда, только добавленная
		 */
		const STATUS_ACTIVE = 1;
		
		
		/**
		 *Команда удалена
		 */
		const STATUS_DELETED = 2;
		
		
	
		/**
		 * Установить статус активной, сохранить запись если передан параметр
		 * @param bool $save
		 *
		 * @return bool
		 */
		public function setStatusActive( $save = true){
			$this->code_status = self::STATUS_ACTIVE;
			return $save ? $this->save() : true;
		}
		
		
		/**
		 * Установить статус удаленной, сохранить запись если передан параметр
		 * @param bool $save
		 *
		 * @return bool
		 */
		public function setStatusDeleted( $save = true){
			
			$this->code_status = self::STATUS_DELETED;
			return $save ? $this->save() : true;
		}
		
		
		/**
		 * Get the logs for the blog team.
		 */
		public function logs(){
			return $this->hasMany(Log::class);
		}
	
	
		/**
		 * Get the bets for the blog team.
		 */
		public function bets(){
			return $this->hasMany(Bet::class);
		}
	
	
		/**
		 * Get the gamer history for the blog team.
		 */
		public function gamerHistory(){
			return $this->hasMany(GamerHistory::class);
		}
	
	
		/**
		 * Get the match for the blog team.
		 */
		public function match(){
			return $this->belongsTo(Match::class, 'id_country');
		}
	
	
		/**
		 * Get the country for the blog team.
		 */
		public function country(){
			return $this->belongsTo(Country::class, 'id_country');
		}
	
	
	/**
	 * Get the matchOne for the blog team.
	 */
	public function matchTeamOne(){
		return $this->hasMany(Match::class, 'id_team_first');
	}
	
	/**
	 * Get the matchTeamSecond for the blog team.
	 */
	public function matchTeamSecond(){
		return $this->hasMany(Match::class, 'id_team_second');
	}
	
	/**
	 * Get the matches for the blog team.
	 */
	public function matches() {
		return $this->matchTeamOne->merge($this->matchTeamSecond);
	}



     
}
