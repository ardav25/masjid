<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $filllabels = ['name','path','mime_type','size','user_id'];

    protected $casts = ['size' => 'integer'];

    protected $guarded = ['id'];
}
