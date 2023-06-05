<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTagihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_tagihan',
        'nama_tagihan',
        'nominal_tagihan'
    ];

}
