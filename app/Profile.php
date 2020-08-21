<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/O5Tm61nutjRKziCEnidC2QXeAVzkcpo9LREhRic0.webp';
        return '/storage/' .  $imagePath;
    }

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    //To allow user profile to follow
    public function followers() {
        return $this->belongsToMany(User::class);
    }
}