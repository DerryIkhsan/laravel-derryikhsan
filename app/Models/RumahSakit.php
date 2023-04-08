<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RumahSakit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rumah_sakit';

    protected $fillable = [
        'rumah_sakit', 'alamat', 'email', 'telepon'
    ];
}
