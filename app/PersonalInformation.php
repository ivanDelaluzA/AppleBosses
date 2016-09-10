<?php

namespace App;

use App\Colony;
use App\Request;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable = [
        'name',
        'paternal_surname',
        'maternal_surname',
        'sex',
        'birthday',
        'house_phone',
        'mobile_phone',
        'section',
        'block',
        'number',
        'street',
        'interior',
        'profession',
        'colony_id',
    ];

    public function user() {
		return $this->hasOne(Request::class);
	}

    public function citizen()
    {
        return $this->hasOne('App\Citizen');
    }

    public function appleBosse()
    {
        return $this->hasOne('App\AppleBosse');
    }

	public function colony() {
		return $this->belongsTo(Colony::class);
	}

    public function getBirthdayAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
