<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCurd extends Model
{
    use HasFactory;

    // protected $fillable = ['image_name'];
    public $table = 'image_curds';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keytype = 'int';
    public $timestamps = true;
}
