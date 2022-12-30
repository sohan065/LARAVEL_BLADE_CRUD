<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class StudentRepositoryServicesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'StudentRepositoryServices';
    }
}

// 