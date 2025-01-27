<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class role_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


    }
}
