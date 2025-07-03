<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // use HasFactory;


    protected $fillable = [
        'title',
        'author',
        'isbn',
        'Publisher',
        'publication',
        'Edition',
        'shelf',
        'availability'
    ];
}
