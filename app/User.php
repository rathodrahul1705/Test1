<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function isAuthenticated($module, $operation) {
        $rp = DB::select("SELECT permission FROM role_permissions JOIN permissions ON permissions.id = role_permissions.permission_id WHERE permissions.module = ? AND role_permissions.role_id = ? AND role_permissions.permission LIKE '%" . $operation . "%'", [$module, $this->role_id]);
        if (!empty($rp))
            return true;
        return false;
    }
}
