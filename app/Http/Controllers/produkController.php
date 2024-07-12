<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class produkController extends Controller
{
    public function destroy($id) {
        produk::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Angkatan!');
        return redirect('dashboard');
    }
    public function tambah() {
        $products=produk::all();
        return view('produkController', ['produk'=>$products]);

    }
}
