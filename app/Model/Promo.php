<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = ['title', 'description','start_date','end_date','code','amount','status'];

    public function barang() {
       return $this->belongsToMany(Barang::class, BarangPromo::class);
    }
}
