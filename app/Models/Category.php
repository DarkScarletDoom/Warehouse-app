<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * App\Model\Category
 * @property uuid $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */

class Category extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'categories';
    protected $guarded = [];
}
