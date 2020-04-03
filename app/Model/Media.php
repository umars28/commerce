<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['file_name','file_type','media_type','alt','file_size'];
}
