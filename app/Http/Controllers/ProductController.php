<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getAllProduct(){
        $products=Product::all();
        return response()->json($products);
    }

    function getProductById($id){
        $product=Product::find($id);
        return response()->json($product);
    }

    function insertProduct(Request $req){
        $p= new Product();
        $p->product_name=$req->product_name;
        $p->description=$req->description;
        $p->price=$req->price;
        $p->save();

        return response()->json(
            [
                "name"=>$p->product_name,
                "description"=>$p->description,
                "price"=>$p->price,
            ]
        );
    }

    function updateProduct(Request $req,$id){
        $p=Product::find($id);
        $p->product_name=$req->product_name?$req->product_name:$p->product_name;
        $p->description=$req->description?$req->description:$p->description;
        $p->price=$req->price?$req->price:$p->price;
        $p->save();
        return response()->json([
            "message"=>"success update product data"
        ]);
    }
    
}
