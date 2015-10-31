<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $dates = ['dob'];
    protected $table = 'user_profiles';

    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
