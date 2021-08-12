<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Returns the client's ip with a twist ;)
     *
     * @param \Illuminate\Http\Request $request - The injected request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $responseJSON = [];
        $responseJSON['ip'] = $request->ip();

        // The twist
        if ($request->has('name')) {
            $responseJSON['greeting'] = "Hello {$request->name}!";
        }

        return response()->json($responseJSON);
    }
}
