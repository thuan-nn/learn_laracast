<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return Task::latest()->pluck('body');
    }

    public function create() {
        $task = Task::forceCreate(request(['body']));

        event(
            (new TaskCreated($task))
        );
    }
}
