<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Feedback');
    }
}


