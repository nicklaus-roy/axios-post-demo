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
    	$task = $project->tasks()->create([
    		'title' => request()->title,
            'task_category_id' => request()->task_category_id
    	]);
        return $task;
    }    
}