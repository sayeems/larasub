<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visibility extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
    ];

    public function byte(){
        return $this->hasMany(Byte::class);
    }
}
