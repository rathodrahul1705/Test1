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

    public function role(){

        $roles = role::all();
        return view('role.index',compact('roles'));
    }

    public function role_create(){
        return view('role.create');
    }

    public function role_Save(Request $req){
        $data = new role();
        $data->role= $req->role;
        $data->save();
        return redirect('/role');
    }

    public function role_edit($role_id){
    $roles = role::find($role_id);
    return view('role.edit',compact('roles'));
    }
    public function role_edit_Save(Request $req,$role_id){

        $roles = role::find($role_id);
        $roles->role = $req->role;
        $roles->save();
        return redirect('/role');

    }
    public function role_delete($role_id){

        $roles = role::find($role_id);
        $roles->delete();
        return redirect('role');
    }

    public function permission(){

        $permissions = permission::all();
        return view('permission.index',compact('permissions'));
    }

    public function permission_create(){
        return view('permission.create');
    }

    public function permission_Save(Request $req){

        $permission = new permission();
        $permission->module = $req->permission;
        $permission->save();
        return redirect('/permission');
    }

    public function permission_edit($permission_id){
         $permissions = permission::find($permission_id);
         return view('permission.edit',compact('permissions'));
    }
    public function permission_edit_save(Request $req,$permission_id){

        $permissions = permission::find($permission_id);
        $permissions->module = $req->permission;
        $permissions->save();
        return redirect('/permission');
    }
    public function permission_delete($permission_id){

           $permissions = permission::find($permission_id);
           $permissions->delete();
           return redirect('/permission');
    }
}
