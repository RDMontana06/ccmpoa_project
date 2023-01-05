<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    public function action_info()
    {
        return $this->belongsTo(User::class,'action_by','id');
    }
}
