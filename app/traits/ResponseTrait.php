<?php

namespace App\traits;

trait ResponseTrait
{
    protected function success($data = null, $message = 'success', $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function successWithToken($data = null, $message = 'success', $code = 200, $token = null)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
            'token' => $token
        ], $code);
    }

    protected function error($message = 'error', $code = 500)
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], $code);
    }
}
