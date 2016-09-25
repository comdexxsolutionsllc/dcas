<?php

namespace DCASDomain\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DCASDomain\Http\Controllers\Traits\APITrait;

class Controller extends BaseController {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, APITrait;
}
