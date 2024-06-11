<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Model\Product
 * @property uuid $id
 * @property uuid $category_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category $category
 */

class Product extends Model
{
    use HasFactory, softDeletes;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
