<?php
use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{

  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    DB::table('admins')->truncate();

    DB::table('admins')->insert([
        'name' => 'admin1',
        'email' => 'admin1@admin.com',
        'password' => bcrypt('admin1'),
    ]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
  }
}
