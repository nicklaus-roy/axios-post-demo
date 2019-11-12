<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $project = Project::first();
        $tasks = Task::all();
        return view('tasks.index', compact('tasks', 'project'));
    }

    public function create(Project $project)
    {
        $project = Project::first();
        $tasks = Task::all();
        return view('tasks.create', compact('tasks', 'project'));
    }

    public function store(Project $project)
    {
    	$project->tasks()->create([
    		'title' => request()->title,
    		'description' => request()->description
    	]);

    	return redirect('/projects/'.$project->id);
    }
    
    public function edit(Task $task)
    {
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Task $task)
    {
        $task->title = request()->title;
        $task->description = request()->description;
        $task->save();
        return redirect('/projects/'.$task->project->id);
    }
}