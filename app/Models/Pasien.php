<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pasien';

    protected $fillable = [
        'pasien', 'alamat', 'telepon', 'id_rumah_sakit',
    ];
}
