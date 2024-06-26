<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function saleses()
    {
        return $this->hasMany(Sales::class);
    }
}
