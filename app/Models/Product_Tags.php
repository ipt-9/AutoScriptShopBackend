<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Tags extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->hasMany(Tags::class);
    }
}
