<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class det_transaksi extends Model
{
    use HasFactory;

    protected $table = 'det_transaksi';
    protected $fillable = ['detail_id','transaksi_id','menu_id','jumlah','subtotal'];
}
