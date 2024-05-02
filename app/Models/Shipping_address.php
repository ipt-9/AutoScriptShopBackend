<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_address extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        "firstname",
        'lastname',
        'streetname',
        'housenumber',
        "place",
        "country",
        "postalcode",

    ];
    use HasFactory;
}
