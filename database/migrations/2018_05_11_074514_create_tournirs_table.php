<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Bets\Tourney;

class CreateTournirsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Tourney())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->integer('id_main_tourney')->nullable();
				$table->integer('id_game')->nullable();
				$table->string('name', 255);
				$table->string('logo');
				$table->text('description')->nullable();
				$table->string('location')->nullable();
				$table->text('format')->nullable();
				$table->float('fund',8,2)->nullable();
				$table->smallInteger('code_status')->default(1);
				$table->dateTime('started_at');
				$table->dateTime('finished_at');
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Tourney())->getTable());
		}
}
