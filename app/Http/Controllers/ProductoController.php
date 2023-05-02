<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function getAllProducts(){
       return response()->json(productos::All(),200);
    }

    public function createProducts(Request $request){
        $produc = productos::create($request->all()) ;
        return response(['mensaje'=>'se creo satisfactoriamente',200]);
     } 
     public function updateProducts(Request $request,$id){
        $produc = productos::find($id);
        if (is_null($produc)){
         return response()->json(['mensaje'=>' no se ha encontrado el registro ',404]);
        }
        $produc->update($request->all());
        return response()->json(['mensaje'=>'El registro se ha actualizado correctamente',200]);
       
     } 
     public function showProducts($id){
      $produc = productos::find($id); 
      if (is_null($produc)){
         return response()->json(['mensaje'=>' no se ha encontrado el registro ',404]);
        }
        return response()->json($produc,200);
     }

     public function deleteProducts($id){
      $produc = productos::find($id); 
      if (is_null($produc)){
         return response()->json(['mensaje'=>' no se ha encontrado el registro ',404]);
         }
         return response()->json(['mensaje'=>'El registro se borro',200]);
     }


}
