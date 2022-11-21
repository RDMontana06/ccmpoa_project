<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    //
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
