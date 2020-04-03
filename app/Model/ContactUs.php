<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = ['address_1','address_2','contact_number','email','instagram','facebook','twitter','youtube'];
}
