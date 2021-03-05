<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Users;
use App\User as User;

class HandleRequest extends Controller
{
    public function handleRequest(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            $obj = new User();
            
            $rs = $obj->insert($data);
            return $rs;
        }
        return "Sucesso";
    }
}
