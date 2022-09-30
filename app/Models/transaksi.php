<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model {
    protected $table = "tbTransaksi";
    protected $guarded = [];
    
    use HasFactory;
}
