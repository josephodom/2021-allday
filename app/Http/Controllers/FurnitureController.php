<?php

namespace App\Http\Controllers;

use App\Allday\Product;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function viewSingle(int $id = 1)
    {
        $product = new Product();
        $product->name = 'The Sofa';
        $product->priceInCents = 145000;
        $product->priceInCentsOnSale = 125000;
        
        return view('allday.furniture.view', [
            'product' => $product,
        ]);
    }
}
