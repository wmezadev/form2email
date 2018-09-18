<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class Send2EmailController extends Controller
{
    /**
     * Show the email for the given data.
     *
     * @param  string  $email
     * @return Response
     */
    public function __invoke(string $email, Request $request)
    {
        
        $data = array_merge($request->all(), ['email' => $email]);

        $validator = Validator::make($data, [
            'email' => 'required|email',
            '_replyto' => 'nullable|email',
            '_cc'   =>  'nullable|email',
            '_next' => 'nullable|url',
            '_email'    => 'nullable|email|max:191',
            '_name'     => 'nullable|max:191',
            '_subject'  => 'nullable|max:191',
            '_message'  => 'nullable|max:191',
            '_phone'    => 'nullable|max:191'
        ]);

        if ($validator->fails()) {
            return 'error';
        }

        return $data;
    }
}
