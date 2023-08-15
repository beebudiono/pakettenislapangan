<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLatihan extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function ordered()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function detail()
    {
        return $this->hasMany(BiodataPelatih::class, 'paket_id');
    }
}
