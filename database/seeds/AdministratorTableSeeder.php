<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Administrator;

class AdministratorTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    //DB::table('administrators')->delete();
    Administrator::truncate();

    Administrator::insert([
        [
        'administrator_id'=>uniqid();
        'name'=>'hoge',
        'email'=>'hoge@test.com',
        'password'=>Hash::make('hoge')
        ]
        ]);

  }

}
