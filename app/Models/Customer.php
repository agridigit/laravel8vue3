<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'isFavorite' => 'Boolean'
    ];

    protected $fillable = ['name','tel','isFavorite'];
}
