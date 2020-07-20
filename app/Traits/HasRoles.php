<?php


namespace App\Traits;


use App\Model\Role;
use Illuminate\Support\Facades\Auth;

/**
 * Трейт проверки ролей
 * @package App\Traits
 */
trait HasRoles
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }


    /**
     * Проверяет пользователя на роль
     * @param string $role
     * @return mixed
     */
    public function checkRole(string $role)
    {
        return Auth::user()->roles->contains('name', $role);
    }
}
