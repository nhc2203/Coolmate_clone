<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function product_list_view(){
        $product = product::all();
        return view('admin.product.product_list', [
            "title" => "Danh Sách Sản Phẩm",
            "products" => $product
        ]);
        
    }

    public function product_add_view(){
        
        return view('admin.product.product_add',[
            "title" => "Thêm Sản Phẩm"
        ]);
        
    }

    public function product_delete(Request $request){
        product::find($request -> product_id) -> delete();
        return response() -> json([
            'success' => true
        ]);
    }

    public function product_edit(Request $request){
        $product = product::find($request -> id);
        return view('admin.product.product_edit',[
            'title' => "Sửa Sản Phẩm",
            'product' => $product
        ]);
    }

    public function product_update(Request $request){
        $product = product::find($request -> id);
        $product -> name = $request -> input('name');
        $product -> material = $request -> input('material');
        $product -> price_normal = $request -> input('price_normal');
        $product -> price_sale = $request -> input('price_sale');
        $product -> desc = $request ->input('desc');
        $product -> content =$request ->input('content');
        $product -> image = $request ->input('image');
        $image_children = implode('*', $request -> input('image_children'));
        $product -> image_children = $image_children;
        $product -> save();
        return redirect('/admin/product/list');
    
    }

    public function insert_product(Request $request){
       $image_children = implode('*', $request -> input('image_children'));

       $product = new product();
       $product -> name = $request -> input('name');
       $product -> material = $request -> input('material');
       $product -> price_normal = $request -> input('price_normal');
	   $product -> price_sale = $request -> input('price_sale');
       $product -> desc = $request ->input('desc');
       $product -> content =$request ->input('content');
       $product -> image = $request ->input('image');
       $product -> image_children = $image_children;
       $product -> save();
       return redirect()->back();
    }
}
