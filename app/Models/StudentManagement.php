<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentManagement extends Model
{
    use HasFactory;

    public $table = 'student';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keytype = 'int';
    public $timestamps = false;
}
