<?php

namespace DCASDomain\Presenters;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    //public function username()
    //{
    //    return $this->username;
    //}

    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }

}
