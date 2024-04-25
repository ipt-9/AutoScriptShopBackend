<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    //use Searchable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class,"products_in_orders");
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,"product_tags");
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
    protected $fillable = [
        "user_id",
        "title",
        'body',
        'features',
        'password',
        "price",
        "rating",
        "script"

    ];
}


