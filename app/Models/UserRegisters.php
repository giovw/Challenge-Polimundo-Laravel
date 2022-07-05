<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRegisters extends Model
{
    use HasFactory;

    public function destination()
    {
        return $this->belongsTo('App\Models\destination');
    }
}
