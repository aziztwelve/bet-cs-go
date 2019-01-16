<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Setting\Handbook;

class CreateHandbooksTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Handbook())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->integer('id_main_directory');
				$table->string('name_directory_ru', 255);
				$table->string('value_directory_ru', 255);
				$table->string('value_directory_en', 255);
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Handbook())->getTable());
		}
}
