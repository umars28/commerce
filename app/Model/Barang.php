<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['name', 'size', 'price', 'warna', 'rating', 'category_id', 'media_id', 'promo_id', 'status'];

    public function category() {
       return $this->belongsTo(Category::class);
    }
    public function media() {
        return $this->belongsTo(Media::class);
    }
    public function promo() {
        return $this->belongsToMany(Promo::class, BarangPromo::class);
    }
    public function user() {
        return $this->belongsToMany(User::class, Pemesanan::class);
    }
}
