<?php

namespace Domain\Task\Actions;

use Domain\task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

// Processamento com a Base de dados

final class CreateTaskAction
{
    // Ao passar pela TaskData há a garantia que os tipos dos dados são dos tipos esperados pela Model, retornando uma isntancia do próprio Task
    public function __invoke(TaskData $taskData) : Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}