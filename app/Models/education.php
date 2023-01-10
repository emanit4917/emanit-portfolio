<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    use HasFactory;
    protected $fillable = [
        'short_dec','edu_title','years','skill_heading','parchentage','edu_photo',
        
    ];
}
