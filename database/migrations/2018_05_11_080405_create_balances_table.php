<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Balance\Balance;

class CreateBalancesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Balance())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->dateTime('date_operation');
				$table->smallInteger('type_operation')->default(1);
				$table->integer('bet_id')->nullable();
				$table->smallInteger('payment_system');
				$table->decimal('sum',8,2);
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
			Schema::dropIfExists((new Balance())->getTable());
		}
}
