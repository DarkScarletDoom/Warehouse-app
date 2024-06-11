<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryResponseDTO
{
    // public string $id;
    // public string $name;
    // public string $deleted_at;
    // public string $created_at;
    // public string $updated_at;

    // public function __construct(string $id, string $name, string $deleted_at, $created_at, $updated_at)
    // { 
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->deleted_at = $deleted_at;
    //     $this->created_at = $created_at;
    //     $this->updated_at = $updated_at;
    // }

    // public static function fromResponse(Category $category) : CategoryResponseDTO
    // {
    //     return new static(
    //         $category->id,
    //         $category->name,
    //         $category->deleted_at,
    //         $category->created_at,
    //         $category->updated_at,
    //     );
    // }
}
