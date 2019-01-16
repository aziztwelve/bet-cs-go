<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Setting\Setting;

class CreateSettingsTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Setting())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 50);
				$table->string('label', 255);
				$table->text('description');
				$table->integer('value');
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Setting())->getTable());
		}
}
