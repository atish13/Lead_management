<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function users()
    {
        return $This->belongsToMany(User::class,'user_roles');
    }
    public function permissions()
    {
        return $this->belongsToMany(permission:: class,
                                    'role_permission');

    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name',$permission);
    }
}
