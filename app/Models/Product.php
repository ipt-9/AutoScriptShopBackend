<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    protected $fillable = [
        "title",
        'body',
        'features',
        'password',
        "price",
        "rating",
        "script"

    ];
}


