<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(int $scheduleId)
    {
        //選ばれたスケジュールを取得する
        $schedule = Schedule::find($scheduleId);

        //選ばれたスケジュールに紐づくタスクを取得する
        $tasks = Task::where('schedule_id',$scheduleId)->get();

        return view('tasks.index',[
            'schedule' => $schedule,
            'tasks' => $tasks,
        ]);
    }

    public function showEditForm(){
        return view('tasks.edit');
    }

    public function edit(){
        return view('tasks.edit');
    }
}
