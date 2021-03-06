<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;



class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();
        return view('welcome', compact('tasks'));
    }
    
    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        // Após os dados da request passarem pelo TaskRequest, enviamos ao DTO TaskData para validar a tipagem dos dados recebidos
        $data = TaskData::fromRequest($request);

        // passando os dados validados para o CreateTaskAction realizar o comando Create
        $action($data);

        return redirect('/');
    }
}