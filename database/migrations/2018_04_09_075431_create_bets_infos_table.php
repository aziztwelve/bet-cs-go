<?php

use App\Models\Bets\BetsInfo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsInfosTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new BetsInfo())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->smallInteger('equal');
				$table->integer('balance_id');
				$table->integer('all_in');
				$table->integer('all_out');
				$table->integer('compassion');
				$table->decimal('cs', 8,2);
				$table->decimal('cs_live', 8,2);
				$table->decimal('dota', 8,2)->nullable();
				$table->decimal('dota_live', 8,2)->nullable();
				$table->integer('user_id');
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new BetsInfo())->getTable());
		}
}
