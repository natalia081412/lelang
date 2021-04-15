<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;
    public function barang(){
        return $this->BelongsTo(Barang::class);
    }
    public function pemenang($id){
        if($id != NULL){
            $masyarakat = User::findOrFail($id);
            return $masyarakat->name;}
        else{
            return '-';
        }
        
    }
    
    public function petugas($id){
        
            $petugas = User::findOrFail($id);
            return $petugas->name;
}
public function bid(){
    return $this->hasMany(BidHistory::class);
}
public static function penawaran_tertinggi($id){
    $lelang = Lelang::findOrFail($id);
    $bid = BidHistory::where('lelang_id', $id)->max('penawaran_harga');
    if($bid){
        return $bid;
    }else{
        return $lelang->barang->harga;
    }
}
}