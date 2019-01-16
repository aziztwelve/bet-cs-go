<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Admin\CommisionHistory;

class CreateHistoryCommisionsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new CommisionHistory())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->dateTime('date_change');
				$table->integer('percent');
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
			Schema::dropIfExists((new CommisionHistory())->getTable());
		}
}
