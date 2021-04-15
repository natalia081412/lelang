<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelang;
use PDF;

class MenangController extends Controller
{
    public function index(){
        $lemen = Lelang::where('masyarakat_id', auth()->user()->id)->get();
        return view('menang.index',compact('lemen'));
    }
    public function laporan(){
        $lemen = Lelang::all();
        return view('menang.laporan',compact('lemen'));
    }
    public function print()
    {
    	$lemen = Lelang::all();
        return view('menang.print', compact('lemen'));
    }
}
