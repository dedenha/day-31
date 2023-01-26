<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function updateProduct(Request $request, $productId) {
        $user = $request->user();
        if ($user == null){
            return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
        }
        return response()->json([
            "id"=> $productId,
            "msg"=> "Berhasil update data",
            "data"=> $request->all(),
            "name"=> $request->input('name'),
            "user"=> $user
        ]);
    }
}
