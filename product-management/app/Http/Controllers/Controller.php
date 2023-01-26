<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function updateProduct(Request $request, $productId) {
        
        return response()->json([
            "id"=> $productId,
            "msg"=> "Berhasil update data",
            "data"=> $request->all(),
            "name"=> $request->input('name')
        ]);
    }
}
