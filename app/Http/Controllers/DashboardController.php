<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function landing(){
        return view('welcome');
    }

    public function index(){
        return view('dashboard',[
            "produk" => Produk::all()
        ]);
    }
    public function create(){
        return view('createproduk',[
            "produk" => Produk::all()
        ]);
    }

    public function store(Request $request){
        $validatedProduk = $request-> validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'foto' => '',

        ]);

        Produk::create($validatedProduk);

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        Produk::destroy($id);

        return redirect('/dashboard')->with('terhapus', 'Data Telah Dihapus!');
    }

    public function edit($id){
        $produk=Produk::where('id',$id)->first();
        return view('editproduk',[
            'produk' => $produk,
        ]);
    }

    public function update(Request $request){
        $validatedProduk = $request -> validate([
            'nama' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'foto' => '',

        ]);

        Produk::where('id',$request->id)-> update([
            'nama' => $request-> nama,
            'jumlah' => $request -> jumlah,
            'harga' => $request -> harga,
            'foto' => $request -> foto

        ]);

        return redirect('/dashboard')->with('updated','Item telah diupdate!');
    }
}
    

