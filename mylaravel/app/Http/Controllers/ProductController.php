<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\ProductList;
use App\Models\User;

class ProductController extends Controller
{
    //
    function index(){
        $categories = Category::all();
        $product_list = ProductList::all();
        $users = User::all();
        $data['categories'] = $categories;
        $data['product_list'] = $product_list;
        $data['users'] = $users;
        return view('product', $data);
    }

    function add_product(Request $req){
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }
        return redirect('/product');
    }
}
