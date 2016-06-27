<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Complete the given video.
     *
     * @param  Video  $video
     */
    public function complete(Video $video)
    {
        $this->completions()->attach($video);
    }

    /**
     * A user can complete videos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function completions()
    {
        return $this->belongsToMany(Video::class, 'completions')->withTimestamps();
    }
}
