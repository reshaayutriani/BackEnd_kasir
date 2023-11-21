<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mejaa extends Model
{
    use HasFactory;

    protected $table = 'meja';
    protected $fillable = ['nomor_meja', 'kapasitas', 'status'];

    // public function pemesanan()
    // {
    //     return $this->hasMany(pemesanan::class);
    // }
}
