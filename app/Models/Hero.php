<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'Hero';
    protected $filllables =['judul', 'isi'];
    protected $guarded = ['id'];
}
