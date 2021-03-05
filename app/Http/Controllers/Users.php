<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserModel;
use App\user_permissions as UserPermissionModel;

class Users extends Controller
{
    protected $table = "users";

    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
           
            $usr = new UserModel;

            if($data['data']['id'] != ""){
                $usr = UserModel::find($data['data']['id']);
            }

            $usr->name = $data['data']['name'];
            $usr->email = $data['data']['email'];
            $usr->password = $data['data']['password'];
            $usr->save();

            if($data['data']['id'] != ""){
                $obj = new UserPermissionModel;
                $obj->user_id = $usr->id;
                $obj->permission_id = $data['data']['permission_id'];
                $rs = $obj->save();    
            }
            return "Sucesso";
        }else{
            return "Falha";
        }
    }

    public function debug($arq, $sql){
		$f = fopen($arq, "w");
		fwrite($f, $sql);
		fclose($f);
	}
    
    public function get(Request $request, $data = null){
        $usr = UserModel::all();
        return $usr;
    }

    public function delete(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
           
            if($data['data']['id']){
                $usr = UserModel::find($data['data']['id']);
                $usr->delete();
                return "sucesso";
            }else{
                return "falha";
            }
        }else{
            return "falha";
        }
        return "Sucesso";
    }
    
}
