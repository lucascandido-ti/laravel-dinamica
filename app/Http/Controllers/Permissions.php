<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permissions as PermissionModel;

class Permissions extends Controller
{
    protected $table = "permissions";
    
    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            $obj = new PermissionModel;
            $obj->name = $data['data']['name'];
            $rs = $obj->save();
            if($rs){
                return $rs;
            }else{
                return "Error";
            }
            return $rst;
        }
        return "Sucesso";
    }

    
    public function get(Request $request, $data = null){
        $prm = PermissionModel::all();
        return $prm;
    }
    
}
