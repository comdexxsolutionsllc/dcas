<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Session;
//use Laravel\Scout\Searchable;
use Laracasts\Presenter\PresentableTrait;

class User extends Authenticatable {

    use HasApiTokens, Notifiable, PresentableTrait;

    protected $presenter = 'DCASDomain\Presenters\UserPresenter';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * @return bool
     */
    public function isAdministrator()
    {
        return (\Auth::user()->id == 501); // TODO: Change this to your admin ID
    }


    /**
     * @param $id
     */
    public function setImpersonating($id)
    {
        Session::put('impersonate', $id);
    }


    /**
     *
     */
    public function stopImpersonating()
    {
        Session::forget('impersonate');
    }


    /**
     * @return mixed
     */
    public function isImpersonating()
    {
        return Session::has('impersonate');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machines()
    {
        return $this->hasMany('\DCASDomain\Models\Machine', 'user_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('\DCASDomain\Models\Ticket', 'user_id');
    }

}
