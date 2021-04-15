<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelang;
use App\Models\Barang;
use App\Models\BidHistory;
class LelangController extends Controller
{
    public function index(){
        $lelang = Lelang::all();
        return view('lelang.index',compact('lelang'));
    }
    public function tambah(){
        $barang = Barang::where('stok_barang', '>', 0)->get();
        return view('lelang.baru', compact('barang'));
    }
    public function store(Request $request){
        $lelang = new Lelang;
        $lelang->barang_id = $request->barang_id;
        $lelang->tgl_lelang = date('Y-m-d');
        $lelang->harga_pemenang = 0;
        $lelang->masyarakat_id = NULL;
        $lelang->petugas_id = auth()->user()->id;
        $lelang->status = 'dibuka';
        $lelang->save();
        $barang = Barang::findOrFail($request->barang_id);
        $barang->stok_barang -= 1;
        $barang->save();
        return redirect('/lelang');
    }
    public function tutup($id){
        $lelang = Lelang::findOrFail($id);
        $lelang->status = 'ditutup';
        $bid = BidHistory::where('lelang_id', $lelang->id)->orderBy('penawaran_harga','desc')->first();
        $lelang->harga_pemenang = $bid->penawaran_harga;
        $lelang->masyarakat_id = $bid->masyarakat_id;
        $lelang->save();
        return redirect('/lelang');
    }
    public function cancel($id){
        $lelang = Lelang::findOrFail($id);
        $barang = Barang::findOrFail($lelang->barang_id);
        $barang->stok_barang += 1;
        $barang->save();
        $bid = BidHistory::where('lelang_id', $lelang->id)->delete();
        $lelang->delete();
        return redirect('/lelang');
    }
    public function detail($id){
        $lelang = Lelang::findOrFail($id);
        return view('lelang.detail', compact('lelang'));
    }

}
