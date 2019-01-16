<?php

use App\Models\Bets\Bet;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Bet())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->dateTime('date');
				$table->integer('match_id');
				$table->integer('user_id');
				$table->smallInteger('bet_kind')->default(1);
				$table->smallInteger('bet_status')->default(1);
				$table->decimal('bet_sum',8,2);
				$table->integer('team_id');  //на победу
				$table->integer('log_id');
				$table->enum('result', ['Счет', 'Ожидание', 'Отменен', 'Перенесен'])->default('Ожидание');
				$table->enum('status', ['Ожидание', 'Закончен', 'Live'])->default('Ожидание');
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Bet())->getTable());
		}
}
