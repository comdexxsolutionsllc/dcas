<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;
use Laracasts\Presenter\PresentableTrait;

class User extends Authenticatable {

    use HasApiTokens,
        Notifiable,
        PresentableTrait;

    protected $presenter = 'DCASDomain\Presenters\UserPresenter';
    public $timestamps = true;

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

    public function machines() {
        return $this->hasMany('Machine', 'user_id');
    }

    public function tickets() {
        return $this->hasMany('Ticket', 'user_id');
    }

}
