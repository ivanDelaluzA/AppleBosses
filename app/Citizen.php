<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
	protected $fillable = [
		'personal_information_id',
		];

    public function personalInformation() {
		return $this->belongsTo(PersonalInformation::class); //correct
	}

	public function requests() {
		return $this->hasOne(Petition::class);
	}
}
