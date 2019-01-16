<?php

namespace App\Models\User;

use App\Models\Bets\Bet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Setting\Log;


/**
 * Class User
 * @package App\Models\User
 * @property  int  $id
 * @property  string  $surname
 * @property  string  $name
 * @property  string  $birthday
 * @property  string  $phone
 * @property  string  $email
 * @property  string  $password
 * @property  string  $comment
 * @property  int  $code_role
 * @property  int  $code_status
 * @property  int  $balance
 * @property  boolean  $is_send_notifications
 * @property  string  $remember_token
 * @property  string  $created_at
 * @property  string  $updated_at
 */
class User extends Authenticatable {
		use Notifiable;
	
		//roles for users
		const ROLE_GAMER = 1;
		const ROLE_ADMIN = 2;
		const ROLE_MODERATOR = 3;
		
		
		//status for users
		const STATUS_ACTIVE = 1;
		const STATUS_INACTIVE = 2;
		const STATUS_BLOCKED = 3;
	
	
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'name', 'surname', 'birthday', 'phone', 'email', 'comment', 'code_role', 'code_status', 'balance', 'is_send_notifications'
		];
		
		
		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
			'password', 'remember_token',
		];
	
	
		/**
		 * for roles
		 * @return bool
		 */
		public function isTypeGamer() {
			return $this->code_role  === self::ROLE_GAMER;
		}
	
	
		/**
		 * @return bool
		 */
		public function isTypeModerator() {
			return $this->code_role  === self::ROLE_ADMIN;
		}
	
	
		/**
		 * @return bool
		 */
		public function isTypeAdmin() {
			return $this->code_role  === self::ROLE_MODERATOR;
		}
	
	
		/**
		 * for status
		 * @return bool
		 */
		public function isStatusActive() {
			return $this->code_status  === self::STATUS_ACTIVE;
		}
	
	
		/**
		 * @return bool
		 */
		public function  isStatusInactive() {
			return $this->code_status  === self::STATUS_INACTIVE;
		}
	
	
		/**
		 * @return bool
		 */
		public function isStatusBloked() {
			return $this->code_status  === self::STATUS_BLOCKED;
		}
	
	
		/**
		 * Get the logs for the blog bets.
		 */
		public function bets(){
			return $this->hasMany(Bet::class);
		}
	
	
		/**
		 * Get the logs for the blog user.
		 */
		public function logs(){
			return $this->hasMany(Log::class);
		}
		
}
