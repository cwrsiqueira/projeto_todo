<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $users = User::all();
        return view('task.create', [
            'categories' => $categories,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Validator::make(
            $data,
            [
                'title' => 'required',
                'description' => 'required',
                'due_date' => 'required',
                'user_id' => 'required',
                'category_id' => 'required',
            ],
            [
                'required' => 'O campo :attribute é obrigatório'
            ]
        )->validate();
        Task::insert($data);
        return redirect()->route('home')->with('success', 'Tarefa Criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $task = Task::find($id);
        return view('task.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $categories = Category::all();
        $users = User::all();
        return view('task.edit', [
            'task' => $task,
            'categories' => $categories,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        Validator::make(
            $data,
            [
                'title' => 'required',
                'description' => 'required',
                'due_date' => 'required',
                'user_id' => 'required',
                'category_id' => 'required',
            ],
            [
                'required' => 'O campo :attribute é obrigatório'
            ]
        )->validate();

        $task = Task::find($id);
        $task->update($data);
        return redirect()->route('tasks.edit', ['task' => $id])->with('success', 'Tarefa Alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('home');
    }
}
