<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    public function show($id)
    {
        return Products::with("images")->find($id);
    }
    public function showAll(Request $request)
    {   
        $products = Products::where("name","!=","");
        $s = $request->input('s');
        if(!empty($s))
            $products = $products->where('name','like','%'.$s.'%');
        $products = $products->take(100)->get();

        return $products;
    }
    public function landing()
    {
        return view('probs');
    }
}
