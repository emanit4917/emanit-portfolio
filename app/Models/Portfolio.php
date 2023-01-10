<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'thum_heading','thum_title','thum_btn_text','thum_photo','description',
        
    ];
}
