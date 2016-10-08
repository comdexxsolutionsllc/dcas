<?php

namespace Modules\Api\Http\Controllers\Traits;

use Symfony\Component\HttpFoundation\Response as IlluminateResponse;

trait APITrait {

    protected $epochtime, $limit, $locale;


    /**
     * Adds Metadata to the JSON output.
     *
     * @return array
     */
    protected function addMeta()
    {
        $this->epochtime = \Carbon\Carbon::now()->timestamp;
        $this->locale = \Carbon\Carbon::now()->tzName;

        return [
            'server' => [
                '_name'      => (string) $_SERVER['SERVER_NAME'],
                '_timestamp' => $this->epochtime,
                '_date'      => date('Y-m-d'),
                '_locale'    => $this->locale
            ],
            'debug'  => $this->isDebug()
        ];
    }


    /**
     * Enforce $_GET['limit'] between 0-250.
     *
     * @throws \OutOfRangeException
     */
    protected function enforceLimit()
    {
        switch ($this->limit)
        {
            case ($this->limit < 0):
                throw new \OutOfRangeException('Limit MUST be positive.');
            case ($this->limit > 250):
                throw new \OutOfRangeException('Limit MUST NOT exceed 250.');
            default:
                break;
        }
    }


    /**
     * Checks if $_Get['debug'] is set.
     *
     * @return boolean
     */
    protected function isDebug()
    {
        return (app('request')->exists('debug') && ($this->request->input('debug') == 'true' || $this->request->input('debug') == '')) ? true : false;
    }


    /**
     * Not Implemented Error Code.
     *
     * @return JSON
     */
    protected function NotImplemented()
    {
        return response()->json([
            'error_code'        => IlluminateResponse::HTTP_NOT_IMPLEMENTED,
            'error_description' => IlluminateResponse::$statusTexts['501'],
            $this->addMeta()
        ], IlluminateResponse::HTTP_NOT_IMPLEMENTED);
    }

}
