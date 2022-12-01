<?php

namespace App\Repositories;

interface TokenRepositoryInterface
{
    function create($payload);
    function decode($token);
}
