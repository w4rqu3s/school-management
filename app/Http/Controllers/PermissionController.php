<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Permission;

class PermissionController extends Controller
{
    public static function loadPermissions($role) {

        $array_permissions = Array();
        $perm = Permission::with(['resource'])  
            ->where('role_id', $role)->get();   // carrega todas as permissões daquele role, já com os seus resources
        foreach($perm as $item) {
            $array_permissions[$item->resource->name] =
                (boolean) $item->permission;                // vê se tem ou não a permissão e atribui
        }
        // dd($array_permissions);
        session(['user_permissions' => $array_permissions]);
    }

    public static function isAuthorized($resource) {
        $permissions = session('user_permissions');

        if(array_key_exists($resource, $permissions)) {
            return $permissions[$resource];
        }

        return false;
    }
}
