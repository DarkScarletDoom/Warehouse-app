<?php

namespace Http\Controllers\CategoryController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryControllerUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_then_response_has_200_status(): void
    {
        $category = Category::factory()->create();
        $response = $this->patchJson(route('category.update', $category->id), [
            'name' => 'category_name',
        ]);

        $response->assertStatus(200);
        // dd($response);
    }

    public function test_update_then_response_has_correct_structure(): void
    {
        $category = Category::factory()->create();
        $response = $this->patchJson(route('category.update', $category->id), [
            'name' => 'category_name',
        ]);

        // dd($response);
        $response->assertJsonStructure([
            'id',
            'name',
            'deleted_at',
            'created_at',
            'updated_at'
        ]);
    }
}