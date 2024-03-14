<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public function product_tags()
    {
        return $this->belongsTo(Product_Tags::class);
    }

    public function task_tags()
    {
        return $this->belongsTo(Task_Tags::class);
    }
}
