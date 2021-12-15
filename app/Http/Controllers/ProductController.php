<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SerialNumber;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::paginate(12)
        ]);
    }

    public function originalCheck($code)
    {
        $serialNumber = null;
        if($serialNumber = SerialNumber::where('serial_number', $code)->first()) {
            $code = true;
        }else{
            $code = false;
        }
        
        return view('products.original', compact('code', 'serialNumber'));
    }
}
