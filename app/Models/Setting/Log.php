<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Log extends Model{
    
    //logs for USERS
    // const NEW_USER = 1;
    // const USER_CHANGE = 2;
    // const CLIENT_CHANGE = 3;


    //logs for BETS
    // const BET_DONE = 1;
    // const BET_CANCELED = 2;
    // const BET_CORRECT = 3;


    //logs for MATCHES HISTORY
    // const MATCH_NEW = 1;
    // const MATCH_CHANGE = 2;
	

	//logs for BALANCES
    // const BALANCE_IN = 1;
    // const BALANCE_OUT = 2;
    // const BALANCE_COMPENSATION = 3;
    // const BALANCE_CORRECT_OPERATION = 4;


    //logs for COMMISION HISTORY
    // const COMMISION_NEW_PERIOD = 1;
    // const COMMISION_CHANGE_PERIOD = 2;



    //logs for TEAMS
    // const TEAM_NEW = 1;
    // const TEAM_CHANGE = 2;


    //logs for GAMER HISTORY
    // const GAMER_NEW_TEAM = 1;
    // const GAMER_CHANGE_TEAM = 2;


    //logs for TOURNIR
    // const TOURNIR_NEW = 1;
    // const TOURNIR_CHANGE = 2;


    const TYPE_USER_REGISTERED = 1; // Регистрация нового пользователя
    const TYPE_USER_DATA_CHANGED_BY_OWNER = 2; // Изменение данных пользователя пользователем
    const TYPE_USER_DATA_CHANGED_BY_MODERATOR = 3; // Изменение данных пользователя модератором
    const TYPE_TEAM_CREATED = 3; // Изменение данных пользователя модератором









    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_entity', 'id_initiator', 'extra', 'code_type', 'code_entity', 'code_initiator'
    ];


    // /**
    // * for App\Models\User\User
    // * @return bool
    // */
    // public function isNewUser() {
    //     return $this->log_user  === self::NEW_USER;
    // }


    // /**
    //   * 
    //  * @return bool
    //  */
    // public function isChangeUser() {
    //     return $this->log_user  === self::USER_CHANGE;
    // }


    // /**
    //   * 
    //  * @return bool
    //  */
    // public function isClientUser() {
    //     return $this->log_user  === self::CLIENT_CHANGE;
    // }

    // /**
    // * for App\Models\User\User
    // * @return bool
    // */
    // public function isNewUser() {
    //     return $this->log_user  === self::NEW_USER;
    // }


    // /**
    //   * 
    //  * @return bool
    //  */
    // public function isChangeUser() {
    //     return $this->log_user  === self::USER_CHANGE;
    // }


    // /**
    //   * 
    //  * @return bool
    //  */
    // public function isClientUser() {
    //     return $this->log_user  === self::CLIENT_CHANGE;
    // }



    // /**
    // * for App\Models\Bets\Bet
    // * @return bool
    // */
    // public function isDoneBet() {
    //     return $this->log_bet  === self::BET_DONE;
    // }



    // /**
    // * 
    // * @return bool
    // */
    // public function isCanceledBet() {
    //     return $this->log_bet  === self::BET_CANCELED;
    // }



    // /**
    // * 
    // * @return bool
    // */
    // public function isCorrectBet() {
    //     return $this->log_bet  === self::BET_CORRECT;
    // }




    // /**
    // * for App\Models\Bets\MatchHistory
    // * @return bool
    // */
    // public function isNewMatch() {
    //     return $this->log_match_history  === self::MATCH_NEW;
    // }



    // /**
    // * @return bool
    // */
    // public function isChangeMatch() {
    //     return $this->log_match_history  === self::MATCH_CHANGE;
    // }




    // /**
    // * for App\Models\Balance\Balance
    // * @return bool
    // */
    // public function isInBalance() {
    //     return $this->log_balance  === self::BALANCE_IN;
    // }



    // /**
    // * @return bool
    // */
    // public function isOutBalance() {
    //     return $this->log_balance  === self::BALANCE_OUT;
    // }



    // /**
    // * @return bool
    // */
    // public function isCompensationBalance() {
    //     return $this->log_balance  === self::BALANCE_COMPENSATION;
    // }




    // /**
    // * @return bool
    // */
    // public function isCorrectBalance() {
    //     return $this->log_balance  === self::BALANCE_CORRECT_OPERATION;
    // }




    // /**
    // * for App\Models\Admin\CommisionHistory
    // * @return bool
    // */
    // public function isNewCommision() {
    //     return $this->log_commision_history  === self::COMMISION_NEW_PERIOD;
    // }



    // /**
    // * @return bool
    // */
    // public function isChangeCommision() {
    //     return $this->log_commision_history  === self::COMMISION_CHANGE_PERIOD;
    // }





    // /**
    // * for App\Models\Bets\Team
    // * @return bool
    // */
    // public function isNewTeam() {
    //     return $this->log_team  === self::TEAM_NEW;
    // }



    // /**
    // * @return bool
    // */
    // public function isChangeTeam() {
    //     return $this->log_team  === self::TEAM_CHANGE;
    // }




    // /**
    // * for App\Models\Bets\GamerHistory
    // * @return bool
    // */
    // public function isNewGamer() {
    //     return $this->log_gamer_history  === self::GAMER_NEW_TEAM;
    // }



    // /**
    // * @return bool
    // */
    // public function isChangeGamer() {
    //     return $this->log_gamer_history  === self::GAMER_CHANGE_TEAM;
    // }



    // /**
    // * for App\Models\Bets\Tourney
    // * @return bool
    // */
    // public function isNewTournir() {
    //     return $this->log_tournir  === self::TOURNIR_NEW;
    // }



    // /**
    // * @return bool
    // */
    // public function isChangeTournir() {
    //     return $this->log_tournir  === self::TOURNIR_CHANGE;
    // }



























    // /**
    //  * Get the user that owns the log.
    //  */
    // public function user(){
    //     return $this->belongsTo('App\Models\User\User');
    // }



    // /**
    //  * Get the bet that owns the log.
    //  */
    // public function bet(){
    //     return $this->belongsTo('App\Models\Bets\Bet');
    // }



    // /**
    //  * Get the match history that owns the log.
    //  */
    // public function matchHistory(){
    //     return $this->belongsTo('App\Models\Bets\MatchHistory');
    // }



    // /**
    //  * Get the balance that owns the log.
    //  */
    // public function balance(){
    //     return $this->belongsTo('App\Models\Balance\Balance');
    // }



    // *
    //  * Get the commision history that owns the log.
     
    // public function commisionHistory(){
    //     return $this->belongsTo('App\Models\Admin\CommisionHistory');
    // }



    // /**
    //  * Get the team that owns the log.
    //  */
    // public function team(){
    //     return $this->belongsTo('App\Models\Bets\Team');
    // }



    // /**
    //  * Get the gamer history that owns the log.
    //  */
    // public function gamerHistory(){
    //     return $this->belongsTo('App\Models\Bets\GamerHistory');
    // }



    // /**
    //  * Get the tournir  that owns the log.
    //  */
    // public function tournir(){
    //     return $this->belongsTo('App\Models\Bets\Tourney');
    // }

}
