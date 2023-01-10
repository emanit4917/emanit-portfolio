<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'short_desc','loc_name','address','phone','email','soc_icon',
        
    ];
}
