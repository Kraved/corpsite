<?php


namespace App\Traits;


use App\Model\Role;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

/**
 * Трейт проверки ролей
 * @package App\Traits
 */
trait HasRole
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

    /**
     * Добавляет указанному пользователю роль.
     * @param string $userName
     * @param string $roleName
     * @return bool
     */
    public function addRole(string $userName, string $roleName)
    {
        $roleId = Role::whereName($roleName)->first()->id;
        $user = User::whereName($userName)->first();
        if ($user->roles->contains('id', $roleId)) {
            return false;
        }
        $user->roles()->attach($roleId);
        return true;
    }


    /**
     * Удаляет роль указанному пользователю.
     * @param string $userName
     * @param string $roleName
     * @return bool
     */
    public function deleteRole(string $userName, string $roleName)
    {
        $roleId = Role::whereName($roleName)->first()->id;
        $user = User::whereName($userName)->first();
        if (! $user->roles->contains('id', $roleId)) {
            return false;
        }
        $user->roles()->detach($roleId);
        return true;
    }

    public function swapRoles(string $userName, array $rolesArray)
    {
        User::whereName($userName)->first()->roles()->detach();
        foreach ($rolesArray as $role) {
            $this->addRole($userName, $role);
        }
        return true;
    }

}

