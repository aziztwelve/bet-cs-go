<?php

namespace App\Models\Bets;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Match
 * @package App\Models\Bets
 *
 * @property  int  $id
 * @property  int  $id_team_first
 * @property  int  $id_team_second
 * @property  int  $id_tourney
 * @property  int  $score_team_first
 * @property  int  $score_team_second
 * @property  float  $win_percent_team_first
 * @property  float  $win_percent_team_second
 * @property  float  $win_factor_team_first
 * @property  float  $win_factor_team_second
 * @property  float  $bets_amount_team_first
 * @property  float  $bets_amount_team_second
 * @property  int  $code_status
 * @property  string  $started_at
 * @property  string  $created_at
 * @property  string  $updated_at
 */
class Match extends Model{
	
	
	/**   Предстоящий      * */
	const STATUS_COMING = 1;
	
	
	/**         Live    **/
	const STATUS_LIVE = 2;
	
	
	/**     Прошедший**/
	const STATUS_PAST = 3;
	
	
	/**                Перенесен     *  */
	const STATUS_MOVED = 4;
	
	
	/**         Отменен    * */
	const STATUS_CANCELED = 5;


    /**            Удален  **/
	const STATUS_DELETED = 6;
	
	
	/**
	* The attributes that are mass assignable.
	 *
	* @var array
	 */
		protected $fillable = [
			'id_team_first',
			'id_team_second',
			'id_tourney',
			'score_team_first',
			'score_team_second',
			'win_percent_team_first',
			'win_percent_team_second',
			'win_factor_team_first',
			'win_factor_team_second',
			'bets_amount_team_first',
			'bets_amount_team_second',
			'code_status',
			'started_at'
		];
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusCanceled() {
		return $this->code_status  === self::STATUS_CANCELED;
	}
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusMoved() {
		return $this->code_status  === self::STATUS_MOVED;
	}
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusLive() {
		return $this->code_status  === self::STATUS_LIVE;
	}
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusPast() {
		return $this->code_status  === self::STATUS_PAST;
	}
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusComing() {
		return $this->code_status  === self::STATUS_COMING;
	}
	
	
	/**
	 * for status
	 * @return bool
	 */
	public function isStatusDeleted() {
		return $this->code_status  === self::STATUS_DELETED;
	}
	
	
	/**
	 * Get the teamOne for the blog matches.
	 */
	public function teamOne() {
		return $this->belongsTo(Team::class, 'id_team_first');
	}
	
	/**
	 * Get the teamSecond for the blog matches.
	 */
	public function teamSecond() {
		return $this->belongsTo(Team::class, 'id_team_second');
	}
	
	
	/**
	 * Get the teams for the blog matches.
	 */
//	public function teams() {
//		return $this->teamOne->merge($this->teamSecond);
//	}
	
	
	/**
	 * Get the teamOne for the blog matches.
	 */
	public function tourney() {
		return $this->belongsTo(Tourney::class, 'id_tourney');
	}
	
	
}
