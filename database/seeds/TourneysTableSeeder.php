<?php

use Illuminate\Database\Seeder;

class TourneysTableSeeder extends Seeder{
	    /**
	     * Run the database seeds.
	     *
	     * @return void
	     */
	public function run(){
		
		
		$tourney = new \App\Models\Bets\Tourney([
			'name'=> 'Adrenaline Cyber League 2018 будущий',
			'logo'=> 'https://betscsgo.net/images/leagues/go/587_1520955021.png',
			'location'=> 'Москва',
			'format'=> 'Single-Elimination',
			'fund' => '100000',
			'started_at' => '2018-05-23',
			'finished_at' => '2018-05-24',
		]);
		$tourney->save();
	}
}
