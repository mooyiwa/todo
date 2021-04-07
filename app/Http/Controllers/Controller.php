<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\Dispatchesjobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, Dispatchesjobs, ValidatesRequests;
}
