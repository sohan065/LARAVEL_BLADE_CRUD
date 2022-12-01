<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Repositories\MailRepositoryInterface;

class MailRepositoryServices implements MailRepositoryInterface
{
    function send($subject, $data, $email, $view)
    {
        Mail::send($view, $data, function ($message) use ($subject, $email) {
            $message->to($email);
            $message->subject($subject);
        });
    }
}
