<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        return view('schedules.index');
    }

    public function showCreateForm(){
        return view('schedules.create');
    }

    public function create(){
        return view('schedules.create');
    }
}
