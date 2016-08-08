<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeolocationData extends Model
{
    public function appleBosse()
    {
        return $this->hasOne('App\AppleBosse');
    }
}
