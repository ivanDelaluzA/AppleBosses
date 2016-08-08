<?php

namespace App;
use App\PersonalInformation;
use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    protected $fillable = ['zip', 'name', 'colony_scope_id', 'settlement_type_id'];

    public function settlementType() {

		return $this->belongsTo('App\SettlementType','settlement_type_id');
	}

	public function colonyScope() {

		return $this->belongsTo('App\ColonyScope','colony_scope_id');
	}

	public function personalInformation() {

		return $this->hasOne(PersonalInformation::class);
	}
}
