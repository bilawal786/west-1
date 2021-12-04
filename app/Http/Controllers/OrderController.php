<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
   public function index($status){
       $response = Http::get('https://westindiescare.ikaedigital.com/api/website/orders/'.$status.'/Westindies Care Test Website 1');
       $data = $response->body();
       $orders = json_decode($data);
       return view('admin.order.index', compact('orders'));
   }
}
