<?php
	
	use App\Models\User\User;
	use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run(){
			
			$user = new \App\Models\User\User([
				'surname'=> 'user',
				'name'=> 'user',
				'email'=>'user@gmail.com',
				'password' => bcrypt('123456'),
				'code_role'=>User::ROLE_GAMER,
				'code_status'=>User::STATUS_ACTIVE,
				
			]);
			$user->save();
			
			
			$user = new \App\Models\User\User([
				'surname'=> 'admin',
				'name'=> 'admin',
				'email'=>'admin@gmail.com',
				'password' => bcrypt('123456'),
				'code_role'=>User::ROLE_ADMIN,
				'code_status'=>User::STATUS_ACTIVE,
				
			  ]);
			$user->save();
	
	
			$user = new \App\Models\User\User([
				'surname'=> 'moderator',
				'name'=> 'moderator',
				'email'=>'moderator@gmail.com',
				'password' => bcrypt('123456'),
				'code_role'=>User::ROLE_MODERATOR,
				'code_status'=>User::STATUS_ACTIVE,
				
			]);
			$user->save();
		}

}
