<?php

use App\Models\User\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create((new User())->getTable(), function (Blueprint $table) {
				$table->increments('id');
				$table->string('surname', 50);
				$table->string('name', 50);
				$table->dateTime('birthday')->nullable();
				$table->string('phone', 15)->nullable();
				$table->string('email')->unique();
				$table->string('password');
				$table->text('comment')->nullable();
				$table->smallInteger('code_role')->default(1);
				$table->smallInteger('code_status')->default(1);
				$table->float('balance', 8, 2)->default(0);
				$table->boolean('is_send_notifications')->default(1);
				$table->rememberToken();
				$table->timestamps();
			});
		}
	
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists((new User())->getTable());
		}
}
