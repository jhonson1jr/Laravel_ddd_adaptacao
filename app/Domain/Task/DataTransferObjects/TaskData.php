<?php

namespace Domain\Task\DataTransferObjects;

use App\Web\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

// DTO garantindo os tipos dos dados que estão sendo transitados com a biblioteca Spatie
// já validando-os ao passar pela request TaskRequest

class TaskData extends DataTransferObject
{
    // Tipagem dos dados:
    
    /** @var string */
    public $task;
    
    /** @var string */
    public $category;

    public static function fromRequest(TaskRequest $taskRequest) : TaskData
    {
        return new Self([
            'task' => $taskRequest['task'],
            'category' => $taskRequest['category']
        ]);
    }

}