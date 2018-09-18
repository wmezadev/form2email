<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendDataForm;
use App\SentLog;

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
        $cc = $request->get('_cc');
        $url = $request->get('_next');

        $validator = Validator::make($data, [
            'email' => 'required|email|max:191',
            '_cc'   =>  'nullable|email|max:191',
            '_next' => 'nullable|url|max:191',
            '_email'    => 'nullable|email|max:191',
            '_name'     => 'nullable|max:191',
            '_subject'  => 'nullable|max:191',
            '_message'  => 'nullable|max:191',
            '_phone'    => 'nullable|max:191'
        ]);

        if ($validator->fails()) {
            return 'Error en alguno de los campos';
        }

        SentLog::create([
            'email'=> $email, 
            'data' => implode(",", $data), 
            'client_ip' => $request->ip(),
            'user_agent' => $request->header('user-agent')
        ]);

        $when = now()->addMinutes(0.1);

        if(is_null($cc)){
            Mail::to($email)->later($when, new SendDataForm($data));
        }
        else {
            Mail::to($email)->cc($cc)->later($when, new SendDataForm($data));
        }
        
        if(!is_null($url)){
            return redirect($url);
        }

        return back();
    }
}
