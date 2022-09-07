<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'roles_permissions');
    }

    // for showing the permissions under this role
    public function assignpermission()
    {
        return $this->hasMany(Roles_permission::class);
    }
}
