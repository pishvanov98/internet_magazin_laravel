<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryToProduct extends Model
{
    protected $table = 'category_to_product';
    use HasFactory;
}
