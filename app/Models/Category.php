<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $incrementing = true;
    protected $timestamps = true;

    public function category(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
