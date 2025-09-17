<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // opsional kalau nama tabel sudah "products"
    protected $fillable = ['name', 'price', 'stock'];
}
