<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function attachment()
    {
        return $this->hasMany(MarketplaceAttachment::class, 'marketplace_id', 'id');
    }
}
