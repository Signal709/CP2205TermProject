<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;

    public function d_v_d()
    {
        return $this->hasMany(DVD::class);
    }
}
