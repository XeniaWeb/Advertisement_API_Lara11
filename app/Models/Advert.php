<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advert extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'adverts';

    protected $fillable = [
        'title',
        'description',
        'price',
        'comment',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
