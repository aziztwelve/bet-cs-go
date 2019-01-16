<?php

namespace App\Models\Setting;

use App\Models\Bets\Team;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Country
 * @package App\Models\Setting
 *
 * @property int    $id
 * @property string $name
 * @property string $icon_flag
 * @property string $created_at
 * @property string $updated_at
 */
class Country extends Model{

	/** @var string */
	protected $table = 'countries';



	/**
	 * Get the handbook for the blog country.
	 */
	public function handbook(){
		return $this->belongsTo(Handbook::class);
	}


	/**
	 * Get the teams for the blog country.
	 */
	public function teams(){
		return $this->hasMany(Team::class, 'id_country');
	}

}