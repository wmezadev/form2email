<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Send2EmailController extends Controller
{
    /**
     * Show the email for the given data.
     *
     * @param  var  $email
     * @return Response
     */
    public function __invoke($email)
    {
        return $email;
    }
}
