<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pasien';

    protected $fillable = [
        'id', 'pasien', 'alamat', 'telepon', 'id_rumah_sakit',
    ];

    public function rumah_sakit(): BelongsTo{
        return $this->BelongsTo(RumahSakit::class, 'id_rumah_sakit', 'id');
    }
}
