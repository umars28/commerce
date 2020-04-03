<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['jenis','media_id','status'];

    public function media() {
       return $this->belongsTo(Media::class);
    }
    public function barang() {
      return $this->hasMany(Barang::class);
    }
}
