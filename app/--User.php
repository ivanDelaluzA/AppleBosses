<?php

namespace App;
use App\PersonalInformation;
use App\Request as Petition;
use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','sub_email', 'password','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personalInformation() {
		return $this->belongsTo(PersonalInformation::class); //correct
	}

	public function requests() {
		return $this->belongsToMany(Petition::class);
	}

	public function roles() {
		return $this->belongsTo(Role::class);
	}

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
