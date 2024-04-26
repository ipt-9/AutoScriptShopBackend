<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,"product_tag");
    }
    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,"tag_task");
    }
}
