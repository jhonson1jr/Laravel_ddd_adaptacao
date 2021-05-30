<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\TaskStatus;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Model limpa e objetiva

class Task extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task',
        'category',
        'status'
    ];

    /**
     * Usando Accessor para executar o processamento do campo Status quando ocorrer get
     *
     * @param  string  $value
     * @return string
    */
    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value); // Passando pelo Enum Type para processar o Status
    }
}
