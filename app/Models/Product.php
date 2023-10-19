<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

       // Creacion de aisgnacion maxima de datos
    
       protected $fillable = [
        'sku',
        'title',
        'image',
        'description',
        'price',
        'category'
    ];

    public function user()
    {
        // Una pubLicacion pertence a un unico usuario
        return $this->belongsTo(User::class);

    }
}
