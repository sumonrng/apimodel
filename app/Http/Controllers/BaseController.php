<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result,$messages)
    {
        $response = [
            'success'  => true,
            'data'     => $result,
            'message'  => $messages
        ];
        return response()->json($response,200);
    }
    public function sendError($error, $errorMessage = [],$code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error
        ];
        if(!empty($errorMessage)){
            $response['data'] = $errorMessage;
        }
        return response()->json($response,$code);
    }
}
