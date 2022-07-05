<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory;

    public function user_registers()
    {
        return $this->hasMany('App\Models\UserRegisters');
    }
}
