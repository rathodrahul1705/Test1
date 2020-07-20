<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\permission;
use App\RolePermission;

class RoleController extends Controller
{
    public function role_permission(){
    	 $roles=role::all();
    	 // dd($roles);
    	 $permissions = permission::all();
    	 $role_permission_db = RolePermission::all();
        $role_permissions = [];
        foreach ($role_permission_db as $value) {
            $role_permissions[$value->role_id . "-" . $value->permission_id] = $value->permission;
        }

    	return view('role_permission',compact('roles','permissions','role_permissions'));
    }

    public function  store(Request $request){

    	$keys = array_keys($request->all());
    	// dd($keys);
    	unset($keys[0]);
    	$rp_action = [];
    	if (count($keys) > 0) {
	    	foreach ($keys as $value) {
	    		$data = explode("-", $value);
                $rp = RolePermission::whereRaw('role_id = ? AND permission_id = ?', [$data[1], $data[2]])->first();
                if ($data[3] == "c") {
                    if (!$rp)
                        $rp = new RolePermission();
                    if (strpos($rp->permission, $data[0]) === false) {
                        $rp->permission .= $data[0];
        	    		$rp->role_id = $data[1];
        	    		$rp->permission_id = $data[2];
        	    		$rp_action[] = $rp->save();
                    }
                }
                else if ($data[3] == "d") {
                    if ($rp) {
                        $rp->permission = str_replace($data[0], "", $rp->permission);
                        $rp_action[] = $rp->save();
                    if ($rp->permission == "")
                        $rp_action[] = RolePermission::whereRaw('role_id = ? AND permission_id = ?', [$data[1], $data[2]])->delete();
                    }
                }
	    	}
	    	if ((count(array_unique($rp_action)) == 1) && ($rp_action[0] == 1)) {
		    	$response['status'] = "Success";
	    		return $response;
	    	}
    	}
    $response['status'] = "Data Empty";
    return $response;
    }

}
