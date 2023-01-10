<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading','name_title','description','banner_photo','Links','button_text',
        
    ];
}
