<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // create product
    public function create(Request $request){
        //return Product::create($request->input());
        $data = $request->input();
        foreach($data as $item){
            Product::create(
                [
                    "product_id"=>$item["product_id"],
                    "name"=>$item["name"],
                    "description"=>$item["description"],
                    "price"=>$item["price"],
                    "stock"=>$item["stock"],
                ]
            );
        }
        return "ok";
    }
    //read product
    public function read(){
        return Product::get();
    }
    //update product
    public function update(Request $request){
        $id = $request->id;
        $body = $request->input();
        return Product::where('id',$id)->update($body);
    }
    //delete product
    public function delete(Request $request){
        $id = $request->id;
        return Product::where('id',$id)->delete();
    }
}
