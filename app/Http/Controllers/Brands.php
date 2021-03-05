<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brands as BrandModel;

class Brands extends Controller
{
    protected $table = "brands";
    
    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            $brd = new BrandModel;

            if($data['data']['id'] != ""){
                $usr = BrandModel::find($data['data']['id']);
            }

            $brd->name = $data['data']['name'];
            $rs = $brd->save();
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
        $brd = BrandModel::all();
        return $brd;
    }

    
    public function delete(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            if($data['data']['id']){
                $usr = BrandModel::find($data['data']['id']);
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
