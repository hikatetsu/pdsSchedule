<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('tasks.index');
    }

    public function showEditForm(){
        return view('tasks.edit');
    }

    public function edit(){
        return view('tasks.edit');
    }
}
