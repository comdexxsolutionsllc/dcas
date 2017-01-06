<?php

namespace Modules\Api\Objects;

use Symfony\Component\HttpFoundation\Response as IlluminateResponse;

class APIError {

    /**
     * Not Allowed Error Code.
     *
     * @return JSON
     */
    static public function NotAllowed()
    {
        return response()->json([
            'error_code'        => IlluminateResponse::HTTP_METHOD_NOT_ALLOWED,
            'error_description' => IlluminateResponse::$statusTexts['405'],
            'method'            => debug_backtrace()[1]['function'],
            'resource'          => debug_backtrace()[1]['class']
        ], IlluminateResponse::HTTP_METHOD_NOT_ALLOWED);
    }


    /**
     * Not Implemented Error Code.
     *
     * @return JSON
     */
    static public function NotImplemented()
    {
        return response()->json([
            'error_code'        => IlluminateResponse::HTTP_NOT_IMPLEMENTED,
            'error_description' => IlluminateResponse::$statusTexts['501'],
            'method'            => debug_backtrace()[1]['function'],
            'resource'          => debug_backtrace()[1]['class']
        ], IlluminateResponse::HTTP_NOT_IMPLEMENTED);
    }

}