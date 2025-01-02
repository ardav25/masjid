<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasis';

    // Corrected typo in 'fillable'
    protected $fillable = [
        'judul', 
        'isi', 
        'path',
        'qris_path', 
        'nama_atm_1',
        'nama_atm_2',
        'nama_atm_3',
        'no_rek_1',
        'no_rek_2',
        'no_rek_3',
        'emoney_1',
        'emoney_2',
        'emoney_3',
        'nomer_va_1',
        'nomer_va_2',
        'nomer_va_3',
        'button_text', 
        'button_url', 

    ];

    protected $guarded = ['id'];

    /**
     * Define the relationship with the Category model.
     */

}
