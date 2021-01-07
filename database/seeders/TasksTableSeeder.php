<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,3) as $num){
            DB::table('tasks')->insert([
                'schedule_id' => 1,
                'task_name' => "作業{$num}",
                'scheduled_start_time' => Carbon::createFromTimeString("1{$num}:00:00"),
                'scheduled_end_time' => Carbon::createFromTimeString("1{$num}:30:00"),
                'actual_start_time' => Carbon::createFromTimeString("1{$num}:00:00"),
                'actual_end_time' => Carbon::createFromTimeString("1{$num}:45:00"),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
