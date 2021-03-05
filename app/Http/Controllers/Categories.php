<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories as CategorieModel;

class Categories extends Controller
{
    protected $table = "categories";
    
    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            $ctg = new CategorieModel;

            if($data['data']['id'] != ""){
                $usr = CategorieModel::find($data['data']['id']);
            }
            
            $ctg->name = $data['data']['name'];
            $rs = $ctg->save();
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
        $ctg = CategorieModel::all();
        return $ctg;
    }

    
    public function delete(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            if($data['data']['id']){
                $usr = CategorieModel::find($data['data']['id']);
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
