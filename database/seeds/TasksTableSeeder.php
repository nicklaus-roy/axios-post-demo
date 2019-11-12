<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
        	['project_id' => 1, 'title' => 'Title 1', 'description' => 'Task 1', 'task_category_id' => 1],
        	['project_id' => 1, 'title' => 'Title 2', 'description' => 'Task 2', 'task_category_id' => 2],
        	['project_id' => 1, 'title' => 'Title 3', 'description' => 'Task 3', 'task_category_id' => 1],
        	['project_id' => 1, 'title' => 'Title 4', 'description' => 'Task 4', 'task_category_id' => 3],
        	['project_id' => 1, 'title' => 'Title 5', 'description' => 'Task 5', 'task_category_id' => 2],
        	['project_id' => 1, 'title' => 'Title 6', 'description' => 'Task 6', 'task_category_id' => 2],
        ];
        Task::insert($tasks);
    }
}
