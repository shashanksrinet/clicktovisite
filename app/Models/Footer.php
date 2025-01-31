<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';

    protected $fillable = [
        'logo_path',
        'description',
        'address',
        'phone',
        'link_one',
        'link_two',
        'link_three',
        'link_four',
        'link_five',
        'link_six',
        'link_seven',
        'link_eight',
        'facebook',
        'google',
        'twitter',
        'linkedin'
    ];
}

