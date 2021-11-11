<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index(){
        $response = Http::get('https://westindiescare.ikaedigital.com/api/products');
        $products = $response->json();
        return view('front.index', compact('products'));
    }
    public function product($id){
        $response = Http::get('https://westindiescare.ikaedigital.com/api/product/'.$id);
        $product = $response->json();
        return view('front.product', compact('product'));
    }
}
