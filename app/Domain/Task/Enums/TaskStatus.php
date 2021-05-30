<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class TaskStatus extends Enum 
{
    // Representando os status que uma tarefa (Task) pode ter:

    private const COMPLETE = 'complete';
    
    private const INCOMPLETE = 'incomplete';
    
    public static function status($value) : string
    {
        switch ($value) {
            case self::COMPLETE:
                return 'line-through'; // Tarefa com status Completo risca a linha (css)
                break;
            case self::INCOMPLETE:
                return 'none'; // Se ainda incompleto, faz nada
                break;
            default:
                return 'none';
                break;
        }
    }
}