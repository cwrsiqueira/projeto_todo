<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::orderBy('done')->orderBy('due_date', 'DESC')->get();
        return view('home', ['tasks' => $tasks]);
    }
}
