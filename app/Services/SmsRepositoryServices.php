<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Repositories\SmsRepositoryInterface;

class SmsRepositoryServices implements SmsRepositoryInterface
{

    function sendSms($credentials)
    {

        $verificationCode = Str::random(6);
        $sendTo = $credentials['contacts'];
        $url = 'https://isms.mimsms.com/smsapi';
        $result =  Http::get($url, [
            'api_key' =>  'C20017806371ee4f0f3af8.48490840',
            'type' => 'text',
            'contacts' => $sendTo,
            'senderid' => '8809601004703',
            'msg' => $credentials['msg'] . $verificationCode,
        ]);

        return $result;
    }
}
