<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\SomeFancyFactory;

class RumahSakit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rumah_sakit';

    protected $fillable = [
        'id', 'rumah_sakit', 'alamat', 'email', 'telepon'
    ];
}
