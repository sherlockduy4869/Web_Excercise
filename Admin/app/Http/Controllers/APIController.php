<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Nette\Utils\Json;

class APIController extends Controller
{
    public function getProduct(){
        $products = Products::all();
        return response() -> json($products);
    }
}
