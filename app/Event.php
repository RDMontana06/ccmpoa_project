<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
    public function user_event()
    {
        return $this->hasMany(UserEvent::class);
    }
    public function attachment()
    {
        return $this->hasMany(EventAttachment::class);
    }
}
