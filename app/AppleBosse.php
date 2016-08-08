<?php

namespace App;
use App\GeolocationData;
use App\PersonalInformation;
use Illuminate\Database\Eloquent\Model;

class AppleBosse extends Model
{
	protected $fillable = [
		'is_active', 'personal_information_id','geolocation_data', 
		];

    public function personalInformation() {
		return $this->belongsTo(PersonalInformation::class); //correct
	}

	public function geolocationData() {
		return $this->belongsTo(GeolocationData::class); //correct
	}

	public function requests() {
		return $this->hasOne(Petition::class);
	}
}
