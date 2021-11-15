<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{


public function postProducts(CreateProductRequest $request){
    $data = $request->validated();
    $data['user_id'] = Auth::user()->id;

    $products = Products::create($data);
    return response()->json($data);
}
}
