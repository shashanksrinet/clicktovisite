<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderLogo extends Model
{
    use HasFactory;

    protected $table = 'headerlogo';

    protected $fillable = [
        'img_path',
    ];
}
