<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'date' => Carbon::tomorrow(),
            'created_at' => Carbon::tomorrow(),
            'updated_at' => Carbon::tomorrow(),
        ];
        DB::table('schedules')->insert($param);

        $param = [
            'date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('schedules')->insert($param);

        $param = [
            'date' => Carbon::yesterday(),
            'created_at' => Carbon::yesterday(),
            'updated_at' => Carbon::yesterday(),
        ];
        DB::table('schedules')->insert($param);
    }
}
