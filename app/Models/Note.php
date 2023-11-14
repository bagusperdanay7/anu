<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'judul',
        'tanggal',
        'keterangan',
        'jumlah_pengeluaran',
        'kategori',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
