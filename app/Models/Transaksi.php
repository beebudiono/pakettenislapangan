<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    const LAPANGANLATIHAN = "UNESA";

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paket()
    {
        return $this->belongsTo(PaketLatihan::class);
    }

    public function scopeByRole($query, $user)
    {
        if($user->level == User::LEVEL_TRAINER){
            return $query->where("main_trainer_id", $user->id);
        }

        return $query;
    }
}
