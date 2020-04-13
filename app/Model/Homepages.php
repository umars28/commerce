<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Homepages extends Model
{
    protected $table = 'homepages';
    protected $guarded = [];

    public function media() {
        return $this->belongsTo(Media::class, 'media_id');
    }
    public function media2() {
        return $this->belongsTo(Media::class, 'media2_id');
    }
    public function media3() {
        return $this->belongsTo(Media::class,'media3_id');
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function barang() {
        return $this->belongsTo(Barang::class);
    }
    public function fitur() {
        return $this->belongsTo(Fitur::class);
    }
    public function model() {
        return $this->belongsTo(Model::class);
    }
}
