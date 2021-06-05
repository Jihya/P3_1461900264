<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "Buku";
    protected $fillable = [
        'id',
        'judul',
        'tahun_terbit',
    ];
}
