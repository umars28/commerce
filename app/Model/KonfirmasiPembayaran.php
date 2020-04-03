<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KonfirmasiPembayaran extends Model
{
    protected $fillable = ['pemesanan_id','status'];

    public function pemesanan() {
       return $this->belongsTo(Pemesanan::class);
    }
}
