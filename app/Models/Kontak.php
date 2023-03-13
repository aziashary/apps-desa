<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    
    protected $fillable = [
        'id_kontak',
        'alamat',
        'no_telepon',
        'email',
        'instagram',
        'facebook',
        'whatsapp',
    ];
}

          