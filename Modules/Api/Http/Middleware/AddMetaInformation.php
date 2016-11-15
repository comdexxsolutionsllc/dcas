<?php

namespace Modules\Api\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AddMetaInformation {

    public $response;


    public function __construct(JsonResponse $response)
    {
        $this->response = $response;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        return $this->response->setData(array_merge([
                $response->getData()
            ], $this->addMeta()));

        //return $next($request);
    }


    /**
     * Adds Metadata to the JSON output.
     *
     * @return array
     */
    protected function addMeta()
    {
        return [
            'server' => [
                '_name'      => (string) $_SERVER['SERVER_NAME'],
                '_date'      => date('Y-m-d'),
                '_timestamp' => $this->getEpochTime(),
                '_locale'    => $this->getLocale()
            ],
            'debug'  => $this->isDebug()
        ];
    }


    /**
     * Get Epoch Time
     *
     * @return int
     */
    public function getEpochTime()
    {
        return \Carbon\Carbon::now()->timestamp;
    }


    /**
     * Get Locale
     *
     * @return string
     */
    public function getLocale()
    {
        return \Carbon\Carbon::now()->tzName;
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
}
