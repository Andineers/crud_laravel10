<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard() {
        $products=produk::all();
        return view('dashboard.dashboard', ['produk'=>$products]);
       
    }

}
