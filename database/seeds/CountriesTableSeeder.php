<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run(){
			$countries = ['Россия', 'Польша', 'Казахстан', 'Бразилия',  'Европа',  'Украина', 'США', 'Франция'];
			
			foreach ($countries as $name){
				$country = new \App\Models\Setting\Country([
					'name'=>$name
				]);
	   
				$country->save();
			}
		}
}
