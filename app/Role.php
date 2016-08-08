<?php

namespace App;
use App\Permission;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name','label','home'];

    public function users() {
		return $this->hasOne(User::class);
	}
	public function permissions() {
		return $this->belongsToMany(Permission::class);
	}

	public function syncPermissions($permissions)
    {
        return $this->permissions()->sync($permissions ?: []);
    }

    public function getPermissionsListAttribute()
    {
        return $this->permissions->lists('name','id')->toArray();
    }


}
