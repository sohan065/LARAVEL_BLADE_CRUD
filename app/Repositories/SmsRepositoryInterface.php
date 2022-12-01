<?php

namespace App\Repositories;

interface SmsRepositoryInterface
{

    function sendSms($credentials);
}
