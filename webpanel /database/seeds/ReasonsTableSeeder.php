<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('reasons')->truncate();
        DB::table('reasons')->insert([
            [
                'dispute_type' => 'PROVIDER',
                'dispute_name' => 'User choose wrong location',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dispute_type' => 'PROVIDER',
                'dispute_name' => 'My reason not listed',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dispute_type' => 'PROVIDER',
                'dispute_name' => 'User Unavailable',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dispute_type' => 'USER',
                'dispute_name' => 'My reason not listed',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'dispute_type' => 'USER',
                'dispute_name' => 'Unable to contact driver',
                'status' => 'active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
