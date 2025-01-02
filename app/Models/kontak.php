<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;

    protected $table = 'kontaks';
    protected $filllables =['tahun', 'email', 'no_telpon'];
    protected $guarded = ['id'];
}
