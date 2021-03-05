<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products as ProductModel;

class Products extends Controller
{
    protected $table = "products";
    
    public function insert(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            
            $prd = new ProductModel;

            
            if($data['data']['id'] != ""){
                $usr = ProductModel::find($data['data']['id']);
            }

            $prd->name = $data['data']['name'];
            $prd->estoque = $data['data']['estoque'];
            $prd->preco = $data['data']['preco'];
            $prd->categorie_id = $data['data']['categorie_id'];
            $prd->brand_id = $data['data']['brand_id'];
            $rs = $prd->save();
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
        $prd = ProductModel::all();
        return $prd;
    }
    
    
    public function delete(Request $request, $data = null){
        $data = $request->all();
        if($data['token'] != "" && $data['class'] != ""){
            if($data['data']['id']){
                $usr = ProductModel::find($data['data']['id']);
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
