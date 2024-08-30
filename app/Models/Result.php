<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
