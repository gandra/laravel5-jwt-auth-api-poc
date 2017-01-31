<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;

class TempExternalUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temp_external_users')->truncate();
        DB::table('temp_external_users')->insert(['custom_id' => 'aaa', 'custom_name' => 'Don Quixote', 'custom_password' => Hash::make('1234')]);
        DB::table('temp_external_users')->insert(['custom_id' => 'bbb', 'custom_name' => 'Nikola Tesla', 'custom_password' => Hash::make('1234')]);
        DB::table('temp_external_users')->insert(['custom_id' => 'ccc', 'custom_name' => 'Milos Obilic', 'custom_password' => '1234']);
        DB::table('temp_external_users')->insert(['custom_id' => 'ddd', 'custom_name' => 'Diego Maradona', 'custom_password' => '1234']);
        DB::table('temp_external_users')->insert(['custom_id' => 'eee', 'custom_name' => 'José Mojica', 'custom_password' => '1234']);

    }
}
