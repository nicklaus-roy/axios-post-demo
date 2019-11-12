<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
        	['title' => 'Project 1', 'description' => 'Desc 1', 'due_date' => '2019-11-12']
        ]);
    }
}
