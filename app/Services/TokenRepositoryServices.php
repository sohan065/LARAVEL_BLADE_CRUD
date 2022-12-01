<?php

namespace App\Services;

use Log;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Repositories\TokenRepositoryInterface;

class TokenRepositoryServices   implements TokenRepositoryInterface
{
    private $_key;

    function __construct()
    {
        $this->_key = env('APP_KEY');
    }

    function create($payload)
    {
        try {
            $token = JWT::encode($payload, $this->_key, 'HS256');
            return $token;
        } catch (Exception $e) {
            Log::error($e);
        }
        return false;
    }

    function decode($token)
    {
        try {
            $decoded = JWT::decode($token, new Key($this->_key, 'HS256'));
            return (array) $decoded;
        } catch (Exception $exception) {
            Log::error($exception);
        }
        return false;
    }
}
