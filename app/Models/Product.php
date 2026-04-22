<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // These are the columns we allow to be mass-assigned from our forms
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
}