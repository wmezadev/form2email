<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SentLog extends Model
{
    protected $fillable = array('email', 'data', 'client_ip', 'user_agent');
}
