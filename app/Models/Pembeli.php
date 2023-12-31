<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pembeli',
        'nama',
        'no_hp',
        'alamat',
        'email'
    ];
}
