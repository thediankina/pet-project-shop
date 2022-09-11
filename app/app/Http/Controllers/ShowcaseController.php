<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $string = "Products\r\n\r\n";
        foreach ($products as $product)
        {
            $string .= $product->title . "\r\n";
            $string .= $product->description . "\r\n";
            $string .= $product->price . "\r\n";
            $string .= "\r\n";
        }
        return response($string)->header('Content-Type', 'text/plain');
    }
}
