<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestState extends Model
{
    protected $fillable = ['name','label','color'];

    public function requests() {
		return $this->hasMany('App\Request');
	}
}
