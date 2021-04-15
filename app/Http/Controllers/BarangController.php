<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }
    public function tambah(){
        return view('barang.create');
    }
    public function store( Request $request){
        $barang = new Barang;
        $barang->nama_barang=$request->nama_barang;
        $barang->tgl_input=$request->tgl_input;
        $barang->stok_barang=$request->stok_barang;
        $barang->harga=$request->harga;
        $barang->deskripsi=$request->deskripsi;
        $barang->save();
        return redirect('/barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
    public function change( Request $request){
        $barang = Barang::findOrFail($request->id);
        $barang->nama_barang=$request->nama_barang;
        $barang->tgl_input=$request->tgl_input;
        $barang->stok_barang=$request->stok_barang;
        $barang->harga=$request->harga;
        $barang->deskripsi=$request->deskripsi;
        $barang->save();
        return redirect('/barang');
    }
    public function hapus($id){
        $barang=Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
