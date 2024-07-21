<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard() {
        $produk = produk::paginate(1);
        return view('dashboard.dashboard', ['produk' => $produk]);

    }

    // public function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $data = produk::query()
    //         ->where('column_name', 'like', "%{$search}%") // Ganti column_name dengan nama kolom yang ingin dicari
    //         ->get();

    //     return view('dashboard', compact('data', 'search'));
    // }

}
