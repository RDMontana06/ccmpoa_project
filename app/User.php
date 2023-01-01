<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function attachments()
    {
        return $this->hasMany(PostAttachment::class);
    }
    public function followers()
    {
        return $this->hasMany(Follower::class);
    }
    public function following()
    {
        return $this->hasMany(Follower::class,'follower_id','id');
    }
    public function information()
    {
        return $this->hasOne(UserProfile::class,'user_id','id');
    }
    public function coverPhoto()
    {
        return $this->hasMany(CoverPhoto::class,'user_id','id')->withTrashed();
    }
    public function userAvatar()
    {
        return $this->hasMany(UserAvatar::class,'user_id','id')->withTrashed();
    }
}
