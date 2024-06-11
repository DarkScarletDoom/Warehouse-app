<?php

namespace Http\Controllers\CategoryController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryControllerGetListTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_list_then_response_has_200_status(): void
    {
        $category = Category::factory()->createMany(10);
        $response = $this->getJson(route('category.getlist'));

        $response->assertStatus(200);
    }

    public function test_get_list_then_response_has_correct_structure(): void
    {
        $category = Category::factory()->createMany(10);
        $response = $this->getJson(route('category.getlist'));

        //dd($response);
        $response->assertJsonStructure([
            'items' => [
                '*' => [
                    'id',
                    'name',
                    'deleted_at',
                    'created_at',
                    'updated_at'
                ]
            ],
            'count',
        ]);
    }
}