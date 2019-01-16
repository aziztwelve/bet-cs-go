<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Handbook
 * @package App\Models\Setting
 *
 *   @property  int  $id
 *  @property  int  $id_main_directory
 *  @property  string  $name_directory_ru
 *  @property  string  $value_directory_ru
 *  @property  string  $value_directory_en
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class Handbook extends Model{
	
	
		 /**
		 * Get the country for the blog handbook.
		 */
		public function country(){
			return $this->hasOne(Country::class);
		}
	
}
