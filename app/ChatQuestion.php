<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatQuestion extends Model
{
    //

    public function answers()
    {
    	return $this->hasMany('App\ChatAnswer');
    }
}

