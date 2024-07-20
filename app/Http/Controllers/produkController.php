<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class produkController extends Controller
{
    public function destroy($id) {
        produk::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Produk!');
        return redirect()->route('dashboard');
    }

    public function tambahBarang(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'jenis' => 'required',
            'code' => 'required',
            'stock' => 'required',
            'harga' => 'required'
        ]);

        if ($validate) {
            produk::create($validate);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('tambahBarang');
        }
    }

    public function produk() {
        $produk = produk::paginate(5); 
        return view('dashboard.dashboard', ['produk' => $produk]);
    }

    public function editBarang(Request $request, $id) {
        $validate = $request->validate([
            'name' => 'required',
            'jenis' => 'required',
            'code' => 'required',
            'stock' => 'required',
            'harga' => 'required'
        ]);
        produk::where('id', $id)->update($validate);
        return redirect()->route('dashboard');
    }

    public function produkEdit($id) {
        $produk = produk::findOrFail($id);
        return view('dashboard.editBarang', ['produk' => $produk]);
    }
}
