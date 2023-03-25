<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function checkTask(Request $request)
    {
        if ($request->id != 'all') {
            Task::find($request->id)->update(["done" => $request->done]);
            return;
        }
        $tasks = Task::all();
        foreach ($tasks as $task) {
            $task->update(["done" => $request->done]);
        }
        return;
    }
}
