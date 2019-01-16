<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Bets\GamerHistory;

class CreateGamerHistoriesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new GamerHistory())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->integer('gamer_id');
				$table->integer('team_id');
				$table->integer('log_id');
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new GamerHistory())->getTable());
		}
}
