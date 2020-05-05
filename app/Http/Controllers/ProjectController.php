<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(Project $project) {
        $project->load('tasks');
    }

    public function getTasks(Project $project) {
        return $project->tasks()->pluck('body');
    }

    public function createTasks(Project $project) {
        $task = $project->tasks()->create(\request(['body']));

        event(new TaskCreated($task));

        return $task;
    }
}
