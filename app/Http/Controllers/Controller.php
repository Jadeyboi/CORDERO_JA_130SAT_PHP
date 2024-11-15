<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
abstract class Controller
{
    //
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
>>>>>>> 81748900286eecc1b71e53321cf33ffad9e65501
}
