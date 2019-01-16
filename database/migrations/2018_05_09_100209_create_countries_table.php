<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Setting\Country;


class CreateCountriesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new Country())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 50);
				$table->string('icon_flag',100)->nullable();
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new Country())->getTable());
		}
}
