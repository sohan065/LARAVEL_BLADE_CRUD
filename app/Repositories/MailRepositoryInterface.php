<?php

namespace App\Repositories;

interface MailRepositoryInterface
{
    function send($subject, $data, $email, $view);
}
