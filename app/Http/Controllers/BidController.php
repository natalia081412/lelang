<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidHistory;
use App\Models\Lelang;

class BidController extends Controller
{
    public function index(){
        $letw = Lelang::all();
        return view('tawar.index',compact('letw'));
    }
    public function tw($id){
        $letw = Lelang::findOrFail($id);
        return view('tawar.tw', compact('letw'));
    }
    public function store(Request $request){
        $letw = Lelang::findOrFail($request->id);
        if($request->penawaran_harga <= Lelang::penawaran_tertinggi($request->id)){
            return redirect('/tawar')->with('status', 'Penawaran Harga mengalahi penawaran tertinggi');
            exit;
        }
        $bid = new BidHistory;
        $bid->lelang_id = $request->id;
        $bid->masyarakat_id = auth()->user()->id;
        $bid->penawaran_harga = $request->penawaran_harga;
        $bid->save();
        return redirect('/tawar');
    }
}
