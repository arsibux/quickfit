<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller {

    public function sendResponse($result, $message) {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404) {
        return Response::json(ResponseUtil::makeError($error), $code);
    }
    
    public function isSuperAdmin() {
        if (Auth::id() == 1)
            return true;
        return false;
    }
    public function client(){
         if (Auth::id() != 1)
             return auth ();
    }

}
