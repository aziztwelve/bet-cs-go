<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Bets\Team;

class CreateTeamsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Team())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->integer('id_country')->nullable();
				$table->string('name');
				$table->string('logo');
				$table->integer('date_foundation')->nullable();
				$table->string('site')->nullable();
				$table->text('description');
				$table->float('amount_prize',8,2)->nullable();
				$table->smallInteger('code_status')->default(1);
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Team())->getTable());
		}
}
