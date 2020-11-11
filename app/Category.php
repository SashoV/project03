<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function lectures() {
        return $this->hasMany('App\Lecture')->orderBy('date_added', 'desc');
    }

    public function emails() {
        return $this->hasMany('App\Emails');
    }
}
