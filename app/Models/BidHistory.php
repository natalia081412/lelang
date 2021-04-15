<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidHistory extends Model
{
    use HasFactory;
    protected $table = 'bid_histories';
    public function lelang(){
        return $this->BelongsTo(Lelang::class);
    }
    public function masyarakat($id){
        
        $masyarakat = User::findOrFail($id);
        return $masyarakat->name;
}
}
