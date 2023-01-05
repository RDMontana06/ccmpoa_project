<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function attachment()
    {
        return $this->hasMany(PostAttachment::class, 'user_id', 'id')->withTrashed();
    }
    public function histories()
    {
        return $this->hasMany(PostHistory::class)->orderBy('id','desc');
    }
}
