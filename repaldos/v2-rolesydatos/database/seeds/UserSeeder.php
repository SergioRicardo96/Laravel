<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'cobrador1',
            'estado' => 0,
            'tipo' => 0,
            'email' => 'cobrador1@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'cobrador2',
            'estado' => 0,
            'tipo' => 0,
            'email' => 'cobrador2@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'suscriptor1',
            'estado' => 0,
            'tipo' => 0,
            'email' => 'suscriptor1@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'suscriptor2',
            'estado' => 0,
            'tipo' => 0,
            'email' => 'suscriptor2@gmail.com',
            'password' => bcrypt('pasopaso'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
