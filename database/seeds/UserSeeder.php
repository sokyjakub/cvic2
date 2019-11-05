<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "firstname"=>"Databaza",
            "lastname"=>"moja databaza",
            "Email"=>"moj@email.sk",
            "age"=>"40"
        ]);
    }
}
