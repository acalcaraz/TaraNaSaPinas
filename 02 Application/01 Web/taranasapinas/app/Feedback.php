<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }
}
