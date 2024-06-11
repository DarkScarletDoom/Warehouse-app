<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\DTO\CategoryCreateRequestDTO;

class CategoryController
{
    /**
     * Store
     * 
     * @param Request $request
     * @return Category
     */
    public function store(Request $request) : Category
    {
        $data = CategoryCreateRequestDTO::fromRequest($request);
        $response = Category::create([
            'name' => $data->name,
        ]);

        return Category::findOrFail($response->id);
    }

    /**
     * Get one
     * 
     * @param string $id
     * @return Category
     */
    public function getOne(string $id) : Category
    {
        $response = Category::findOrFail($id);

        return $response;
    }

     /**
     * Get list
     */
    public function getList()
    {
        return Category::all();
    }

    /**
     * Update object.
     * 
     * @param Request $request
     * @param string $id
     * 
     * @return Category
     */
    public function update(Request $request, string $id) : Category
    {
        $category = Category::findOrFail($id);
        $data = CategoryCreateRequestDTO::fromRequest($request);

        $category->name = $data->name;
        
        $category->save();

        return $category;
    }

    /**
     * Delete object.
     * @return Category
     */
    public function delete(string $id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
        //
    }
}
