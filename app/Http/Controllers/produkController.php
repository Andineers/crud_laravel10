<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class produkController extends Controller
{
    public function destroy($id) {
        produk::where('id', $id)->delete();
        Alert::success('Berhasil!', 'Berhasil Menghapus Angkatan!');
        return redirect('dashboard');
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
        return redirect('/dashboard');
       } else {
        return redirect('/tambahBarang');
       }
    }

    public function produk() {
        return view('dashboard.tambahBarang');
    }



    public function editBarang(Request $request, $id) {
        $validate = $request ->validate([
         'name' => 'required',
         'jenis' => 'required',
         'code' => 'required',
         'stock' => 'required',
         'harga' => 'required'
        ]);
        if ($validate) {
         produk::where('id', $id)->update($validate);
         return redirect('/');
        } else {
         return redirect('/editBarang');
        }
     }
     public function produkEdit($id) {
        $produk = produk::where('id', $id)->get();
        return view('dashboard.editBarang', ['produk'=>$produk]);
    }


}
