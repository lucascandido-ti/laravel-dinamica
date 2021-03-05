<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_permissions as UserPermissionModel;

class UserPermissions extends Controller
{
    protected $table = "user_permissions";

        
    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            $obj = new UserPermissionModel;
            $obj->user_id = $data['data']['user_id'];
            $obj->permission_id = $data['data']['permission_id'];
            $rs = $obj->save();
            if($rs){
                $rst->result = "success";
            }else{
                $rst->result = "failed";
            }
            return $rst;
        }
        return "Sucesso";
    }
}
