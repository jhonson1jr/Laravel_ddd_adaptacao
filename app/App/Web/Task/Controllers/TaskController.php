<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use Domain\Task\Models\Task;



class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();
        return view('welcome', compact('tasks'));
    }
    
    public function store()
    {
        
    }
}