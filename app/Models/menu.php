<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['menu_id', 'nama_menu', 'harga', 'deskripsi', 'jenis_id'];

    public function stok()
    {
        return $this->hasMany(stok::class);
    }
}
