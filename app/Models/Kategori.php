<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    public function alat()
    {

        return $this->hasMany(Alat::class);
    }
}
