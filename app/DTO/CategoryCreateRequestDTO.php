<?php

namespace App\DTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryCreateRequestDTO
{
    public string $name;

    public function __construct(string $name) 
    { 
        $this->name = $name;
    }

    public static function fromRequest(Request $request) : CategoryCreateRequestDTO
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return new static(
            $request->name,
        );
    }
}
