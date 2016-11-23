<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeolocationData extends Model
{	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'latitude',
        'longitude',
    ];
    
    public function appleBosse()
    {
        return $this->hasOne('App\AppleBosse');
    }
}
