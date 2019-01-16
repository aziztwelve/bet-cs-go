<?php

use App\Models\Bets\Match;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration{
	/**
	     * Run the migrations.
	     *
	     * @return void
	     */
	public function up(){
		Schema::create((new Match())->getTable(), function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_team_first');
			$table->integer('id_team_second');
			$table->integer('id_tourney')->default(0);
			$table->integer('score_team_first')->default(0);
			$table->integer('score_team_second')->default(0);
			$table->decimal('win_percent_team_first', 8,2)->nullable();
			$table->decimal('win_percent_team_second', 8,2)->nullable();
			$table->decimal('win_factor_team_first', 8,2 )->nullable();
			$table->decimal('win_factor_team_second' , 8,2)->nullable();
			$table->decimal('bets_amount_team_first' , 8,2)->default(0);
			$table->decimal('bets_amount_team_second', 8,2)->default(0);
			$table->smallInteger('code_status')->default(1);
			$table->dateTime('started_at');
			$table->timestamps();
		});
	}
	
	    /**
	     * Reverse the migrations.
	     *
	     * @return void
	     */
	public function down(){
		Schema::dropIfExists((new Match())->getTable());
	}
}
