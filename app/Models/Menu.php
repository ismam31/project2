<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Atur kolom yang diizinkan untuk mass assignment
    protected $fillable = ['name', 'sales_count', 'price'];
}

