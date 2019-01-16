<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Setting\LogEvent;

class CreateLogEventsTable extends Migration{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new LogEvent())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->integer('id_entity');
				$table->integer('id_initiator');
				$table->text('extra');
				$table->smallInteger('code_type')->nullable();
				$table->smallInteger('code_entity')->nullable();
				$table->smallInteger('code_initiator')->nullable();
				$table->timestamps();
			});
		}
	
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new LogEvent())->getTable());
		}
}
