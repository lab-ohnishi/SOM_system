<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table('users')->truncate();

    for ($i = 1; $i < 100; $i++) {
      DB::table('users')->insert([
          'name' => 'テスト' . $i,
          'email' => 'test' . $i . '@example.com',
          'password' => bcrypt('password'),
      ]);
    }
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
