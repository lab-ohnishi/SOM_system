<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call(UserTableSeeder::class);
    $this->call(AdminTableSeeder::class);
  }
}
