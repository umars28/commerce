<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $fillable = ['name','media_id','status'];

    public function media() {
       return $this->belongsTo(Media::class);
    }
}
