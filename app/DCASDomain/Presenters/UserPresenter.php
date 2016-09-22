<?php

namespace DCASDomain\Presenters;

use Laracasts\Presenter\Presenter;
use Auth;

class UserPresenter extends Presenter {

    public function fullName()
    {
        return Auth::user()->first_name . " " . Auth::user()->last_name;
    }

    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }

}
