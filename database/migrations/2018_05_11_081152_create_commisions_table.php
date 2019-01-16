<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Admin\Commision;

class CreateCommisionsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Commision())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->dateTime('date_transaction');
				$table->integer('bet_id');
				$table->decimal('sum_from_bet',8,2);
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Commision())->getTable());
		}
}
