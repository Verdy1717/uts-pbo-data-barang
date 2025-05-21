<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Kategori extends Model
{
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
