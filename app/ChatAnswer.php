<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatAnswer extends Model
{
    //

    public function question()
    {
    	return $this->belongsTo('App\ChatQuestion', 'chat_question_id');
    }
}
