<?php

namespace App\Models\Setting;

use App\Models\Bets\Game;
use App\Models\Bets\MatchHistory;
use App\Models\Bets\Team;
use App\Models\Bets\Tourney;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogEvent
 * @package App\Models\Setting
 *
 * @property int    $id
 * @property int    $id_entity
 * @property int    $id_initiator
 * @property string $extra
 * @property int    $code_type
 * @property int    $code_entity
 * @property int    $code_initiator
 * @property string $created_at
 * @property string $updated_at
 */
class LogEvent extends Model {

	/** Регистрация нового пользователя */
	const TYPE_USER_REGISTERED = 1;

	/** Изменение данных пользователя пользователем */
	const TYPE_USER_UPDATED_BY_OWNER = 2;

	/** Изменение данных пользователя модератором */
	const TYPE_USER_UPDATED_BY_MODERATOR = 3;

	/** Команда создана */
	const TYPE_TEAM_CREATED = 4;

	/** команда изменена модератором */
	const TYPE_TEAM_UPDATED_BY_MODERATOR =5;

	/** команда удалена модератором */
	const TYPE_TEAM_DELETED_BY_MODERATOR = 6;

	/** Турнир создан */
	const TYPE_TOURNEY_CREATED = 7;

	/** Турнир изменен модератором */
	const TYPE_TOURNEY_UPDATED_BY_MODERATOR = 8;

	/** Матч создан */
	const TYPE_MATCH_CREATED = 9;

	/** Матч изменен модератором */
	const TYPE_MATCH_UPDATED_BY_MODERATOR = 10;

	/** Игра создана*/
	const TYPE_GAME_CREATED  = 11;

	/** Игра изменена*/
	const TYPE_GAME_UPDATED  = 12;

	/**Игра удалена */
	const TYPE_GAME_DELETED = 13;
	
	/** тип сущности - пользователь */
	const ENTITY_USER = 1;

	/** тип сущности - модератор */
	const ENTITY_MODERATOR = 2;

	/** тип сущности - команда */
	const ENTITY_TEAM = 3;

	/** тип сущности - турнир */
	const ENTITY_TOURNEY = 4;

	/** тип сущности - матч */
	const ENTITY_MATCH = 5;

	/**тип сущности - игра*/
	const ENTITY_GAME = 6;



	/** @var array */
	protected $fillable = [
		'id_entity',
		'id_initiator',
		'extra',
		'code_type',
		'code_entity',
		'code_initiator',
	];
	
	
	/**
	 *
	 */
//	public static  function prepareChangesData(array $source, array $dirty):array {
//
//
//		 return  $changesData = [
//		 	'log'=>['old' => $source, 'new' =>$dirty];
//		 ]
//
//	}


	/**
	 * @return array
	 */
	protected static function changedUserModerator (array $changedUserModerator){
		$userModerator = User::find($id);
		
		return $changedUserModerator =  [
			'surname' => ['old' => $userModerator->surname, 'new' => $request->surname],
			'name' => ['old' => $userModerator->name, 'new' => $request->name],
			'birthday'  => ['old' => $userModerator->birthday, 'new' => $request->birthday],
			'phone' => ['old' => $userModerator->phone, 'new' => $request->phone],
			'email' => ['old' => $userModerator->email, 'new' => $request->email],
			'password' => ['old' => $userModerator->password, 'new' => $request->password],
			'comment' => ['old' => $userModerator->comment, 'new' => $request->comment],
			'code_role' => ['old' => $userModerator->code_role, 'new' => $request->code_role],
			'code_status' => ['old' => $userModerator->code_status, 'new' => $request->code_status],
			'balance' => ['old' => $userModerator->balance, 'new' => $request->balance],
			'is_send_notifications' => ['old' => $userModerator->is_send_notifications, 'new' => $request->is_send_notifications],
			'created_at' => ['old' => $userModerator->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $userModerator->updated_at, 'new' => $request->updated_at],
		];
	}
	
	
	/**
	 * @return array
	 */
	protected static function changedUserOwner (array $changedUserOwner){
		$userOwner = User::find($id);
		return $changedUserOwner =  [
			'surname' => ['old' => $userOwner->surname, 'new' => $request->surname],
			'name' => ['old' => $userOwner->name, 'new' => $request->name],
			'birthday'  => ['old' => $userOwner->birthday, 'new' => $request->birthday],
			'phone' => ['old' => $userOwner->phone, 'new' => $request->phone],
			'email' => ['old' => $userOwner->email, 'new' => $request->email],
			'password' => ['old' => $userOwner->password, 'new' => $request->password],
			'comment' => ['old' => $userOwner->comment, 'new' => $request->comment],
			'is_send_notifications' => ['old' =>$userOwner->is_send_notifications, 'new' => $request->is_send_notifications],
			'created_at' => ['old' => $userOwner->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $userOwner->updated_at, 'new' => $request->updated_at],
		];
	}
	
	
	/**
	 * @return array
	 */
	protected static function changedTeam (array $changedTeam){
		$team = Team::find($id);
		return $changedTeam =  [
			'id_country' => ['old' => $team->id_country, 'new' => $request->id_country],
			'name' => ['old' => $team->name, 'new' => $request->name],
			'logo'  => ['old' => $team->logo, 'new' => $request->logo],
			'date_foundation' => ['old' => $team->date_foundation, 'new' => $request->date_foundation],
			'site' => ['old' => $team->site, 'new' => $request->site],
			'description' => ['old' => $team->description, 'new' => $request->description],
			'amount_prize' => ['old' => $team->amount_prize, 'new' => $request->amount_prize],
			'code_status' => ['old' => $team->code_status, 'new' => $request->code_status],
			'created_at' => ['old' => $team->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $team->updated_at, 'new' => $request->updated_at],
		];
	}
	
	
	/**
	 * @return array
	 */
	protected static function changedTourney (array $changedTourney){
		$tourney  = Tourney::find($id);
		return $changedTourney =  [
			'id_main_tourney' => ['old' => $tourney->id_main_tourney, 'new' => $request->id_main_tourney],
			'id_game' => ['old' => $tourney->id_game, 'new' => $request->id_game],
			'name' => ['old' => $tourney->name, 'new' => $request->name],
			'description' => ['old' => $tourney->description, 'new' => $request->description],
			'location' => ['old' => $tourney->location, 'new' => $request->location],
			'format' => ['old' => $tourney->format, 'new' => $request->format],
			'fund' => ['old' => $tourney->fund, 'new' => $request->fund],
			'code_status' => ['old' => $tourney->code_status, 'new' => $request->code_status],
			'started_at' => ['old' => $tourney->started_at, 'new' => $request->started_at],
			'finished_at' => ['old' => $tourney->finished_at, 'new' => $request->finished_at],
			'created_at' => ['old' => $tourney->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $tourney->updated_at, 'new' => $request->updated_at],
		];
	}
	
	
	/**
	 * @return array
	 */
	protected static function changedMatch (array $changedMatch){
		$match = MatchHistory::find($id);
		return $changedMatch =  [
			'date' => ['old' => $match->date, 'new' => $request->date],
			'team1_id' => ['old' => $match->team1_id, 'new' => $request->team1_id],
			'team2_id' => ['old' => $match->team2_id, 'new' => $request->team2_id],
			'count_t1' => ['old' => $match->count_t1, 'new' => $request->count_t1],
			'count_t2' => ['old' => $match->count_t2, 'new' => $request->count_t2],
			'possibility_t1' => ['old' => $match->possibility_t1, 'new' => $request->possibility_t1],
			'possibility_t2' => ['old' => $match->possibility_t2, 'new' => $request->possibility_t2],
			'tournir_id' => ['old' => $match->tournir_id, 'new' => $request->tournir_id],
			'status' => ['old' => $match->status, 'new' => $request->status],
			'created_at' => ['old' => $match->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $match->updated_at, 'new' => $request->updated_at],
		];
	}
	
	
	/**
	 * @return array
	 */
	protected static function changedGame (array  $changedGame){
		$game = Game::find($id);
		return $changedGame =  [
			'name' => ['old' => $game->name, 'new' => $request->name],
			'created_at' => ['old' => $game->created_at, 'new' => $request->created_at],
			'updated_at' => ['old' => $game->updated_at, 'new' => $request->updated_at],
		];
	}


	/**
	 * генерация события регистрации пользователя
	 * инициатором является сам регистрирующийся пользователь
	 * @param int $idUser
	 * @return LogEvent
	 */
	public static function sendUserRegistered(int $idUser):LogEvent {
		return static::sendEvent(self::TYPE_USER_REGISTERED, $idUser, $idUser, self::ENTITY_USER,
			self::ENTITY_USER);
	}


	/**
	 * генерация события изменении пользователя
	 * инициатором является сам  пользователь
	 * @param int $idUser
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendUserUpdatedByOwner(int $idUser, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_USER_UPDATED_BY_OWNER, $idUser, $idUser, self::ENTITY_USER,
			self::ENTITY_USER,  $changedData);
	}


		/**
	 * генерация события изменении данных пользователя
	 * инициатором является модератор
	 * @param int $idUser
	 * @param int $idModerator
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendUserUpdatedByModerator(int $idUser, int $idModerator, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_USER_UPDATED_BY_MODERATOR, $idUser, $idModerator, self::ENTITY_USER,
			self::ENTITY_MODERATOR, $changedData);
	}


			/**
	 * генерация события создания новой команды
	 * инициатором является модератор
	 * @param int $idTeam
	 * @param int $idModerator
	 * @return LogEvent
	 */
	public static function sendTeamCreated(int $idTeam, int $idModerator):LogEvent {
		return static::sendEvent(self::TYPE_TEAM_CREATED, $idTeam, $idModerator, self::ENTITY_TEAM,
			self::ENTITY_MODERATOR);
	}


			/**
	 * генерация события создания новой команды
	 * инициатором является модератор
	 * @param int $idTeam
	 * @param int $idModerator
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendTeamUpdatedByModerator(int $idTeam, int $idModerator, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_TEAM_UPDATED_BY_MODERATOR, $idTeam, $idModerator, self::ENTITY_TEAM,
			self::ENTITY_MODERATOR,  $changedData);
	}


			/**
	 * генерация события изменения данных команды
	 * инициатором является модератор
	 * @param int $idTeam
	 * @param int $idModerator
	 * @return LogEvent
	 */
	public static function sendTeamDeleted(int  $idTeam, int $idModerator):LogEvent {
		return static::sendEvent(self::TYPE_TEAM_DELETED_BY_MODERATOR, $idTeam, $idModerator, self::ENTITY_TEAM,
			self::ENTITY_MODERATOR);
	}


			/**
	 * генерация события создания нового турнира
	 * инициатором является модератор
	 * @param int $idTourney
	 * @param int $idModerator
	 * @return LogEvent
	 */
	public static function sendTourneyCreated(int  $idTourney, int $idModerator):LogEvent {
		return static::sendEvent(self::TYPE_TOURNEY_CREATED, $idTourney, $idModerator, self::ENTITY_TOURNEY,
			self::ENTITY_MODERATOR);
	}


			/**
	 * генерация события изменения данных турнира
	 * инициатором является модератор
	 * @param int $idTourney
	 * @param int $idModerator
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendTourneyUpdatedByModerator(int  $idTourney, int $idModerator, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_TOURNEY_UPDATED_BY_MODERATOR, $idTourney, $idModerator, self::ENTITY_TOURNEY,
			self::ENTITY_MODERATOR, $changedData);
	}


			/**
	 * генерация события создания нового матча
	 * инициатором является модератор
	 * @param int $idMatch
	 * @param int $idModerator
	 * @return LogEvent
	 */
	public static function sendMatchCreated(int  $idMatch, int $idModerator):LogEvent {
		return static::sendEvent(self::TYPE_MATCH_CREATED, $idMatch, $idModerator, self::ENTITY_MATCH,
			self::ENTITY_MODERATOR);
	}


			/**
	 * генерация события изменения данных матча
	 * инициатором является модератор
	 * @param int $idMatch
	 * @param int $idModerator
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendMatchUpdatedByModerator(int  $idMatch, int $idModerator, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_MATCH_UPDATED_BY_MODERATOR, $idMatch, $idModerator, self::ENTITY_MATCH,
			self::ENTITY_MODERATOR, $changedData);
	}


			/**
	 * генерация события создания новой игры
	 * инициатором является пользователь
	 * @param int $idGame
	 * @param int $idUser
	 * @return LogEvent
	 */
	public static function sendGameCreated(int $idGame, int $idUser):LogEvent {
		return static::sendEvent(self::TYPE_GAME_CREATED, $idGame, $idUser, self::ENTITY_GAME,
			self::ENTITY_USER);
	}


			/**
	 * генерация события изменения игры
	 * инициатором является пользователь
	 * @param int $idGame
	 * @param int $idUser
	 * @param array  $changedData
	 * @return LogEvent
	 */
	public static function sendGameUpdated(int $idGame, int $idUser, array $changedData):LogEvent {
		return static::sendEvent(self::TYPE_GAME_UPDATED, $idGame, $idUser, self::ENTITY_GAME,
			self::ENTITY_USER, $changedData);
	}


			/**
	 * генерация события удаления игры
	 * инициатором является пользователь
	 * @param int $idGame
	 * @param int $idUser
	 * @return LogEvent
	 */
	public static function sendGameDeleted(int $idGame, int $idUser):LogEvent {
		return static::sendEvent(self::TYPE_GAME_DELETED, $idGame, $idUser, self::ENTITY_GAME,
			self::ENTITY_USER);
	}


	/**
	 * @param int $type
	 * @param int $idEntity
	 * @param int $idInitiator
	 * @param int $typeEntity
	 * @param int $typeInitiator
	 * @param array|null $extra
	 * @return LogEvent
	 */
	protected static function sendEvent(int $type, int $idEntity, int $idInitiator, int $typeEntity, int $typeInitiator,
		array $extra = null):LogEvent {

		$event = new static();

		$event->id_entity      = $idEntity;
		$event->id_initiator   = $idInitiator;
		$event->code_type      = $type;
		$event->code_entity    = $typeEntity;
		$event->code_initiator = $typeInitiator;
		$event->extra          = $extra !== null ? json_encode($extra, JSON_UNESCAPED_UNICODE) : null;

		$event->save();

		return $event;
	}

}
