<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
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

    //Automatically create profile when register otherwise we get an error on user registration
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->profile()->create([
                'title' => $user->username,
            ]);
        });

        Mail::to($user->email)->send(new NewUserWelcomeMail());
    }

    //Relationship with profile for two way communication

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    //Relationship with posts for two way communication
    public function posts() {
        return $this->hasMany(Posts::class)->orderBy('created_at', 'DESC');
    }

    //To allow user to follow a profile
    public function following() {
        return $this->belongsToMany(Profile::class);
    }

}