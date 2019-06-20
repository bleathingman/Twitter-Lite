<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/** Message posted by users */
class Message extends Model
{

    protected $fillable = [ 'content' ];

    /** Get the message author */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
