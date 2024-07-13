<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Byte extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "body",
        "views",
        "copy_count",
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function visibility(){
        return $this->belongsTo(Visibility::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
