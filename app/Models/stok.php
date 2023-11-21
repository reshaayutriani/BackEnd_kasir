<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $primaryKey = 'stok_id';
    protected $fillable = ['menu_id', 'jumlah'];

    public function menu()
    {
        return $this->belongsTo(menu::class);
    }
}
