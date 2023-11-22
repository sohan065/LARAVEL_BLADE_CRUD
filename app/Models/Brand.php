<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo'
    ];

    protected $attributes = [
        'is_active' => true,
        'status' => false
    ];
    protected $hidden = [];
    protected $cast = [];
}
