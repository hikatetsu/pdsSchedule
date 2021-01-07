<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        //データベースからデータを全て取得
        $schedules = Schedule::all();

        return view('schedules.index',['schedules' => $schedules]);
    }


    public function showCreateForm(){
        return view('schedules.create');
    }


    public function create(Request $request)
    {
        //バリデーション実行
        $request->validate([
            'date' => 'required|date'
        ]);

        //Scheduleインスタンス作成
        $schedule = new Schedule;

        //入力値を代入
        $schedule->date = $request->date;

        //データベースに書き込み
        $schedule->save();

        return redirect()->route('schedules.index');
    }
}
