<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'featured',
    ];

    protected $attributes = [
        'status' => false,
        'featured' => false,
    ];
    protected $hidden = [];
    protected $cast = [];
}
