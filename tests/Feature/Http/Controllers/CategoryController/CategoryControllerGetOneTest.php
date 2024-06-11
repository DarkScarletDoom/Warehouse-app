<?php

namespace Http\Controllers\CategoryController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryControllerGetOneTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_one_then_response_has_200_status(): void
    {
        $category = Category::factory()->create();
        $response = $this->getJson(route('category.getone', $category->id));

        $response->assertStatus(200);
    }

    public function test_get_one_then_response_has_correct_structure(): void
    {
        $category = Category::factory()->create();
        $response = $this->getJson(route('category.getone', $category->id));

        $response->assertJsonStructure([
            'id',
            'name',
            'deleted_at',
            'created_at',
            'updated_at'
        ]);
    }
}