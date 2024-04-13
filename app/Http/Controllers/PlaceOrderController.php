<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceOrderController extends Controller
{
    //
    public function placeOrder(Request $request){
        try {
            //code...
            dd("placing order");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
