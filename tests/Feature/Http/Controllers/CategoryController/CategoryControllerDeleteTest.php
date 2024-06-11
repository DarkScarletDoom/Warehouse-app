<?php

namespace Http\Controllers\CategoryController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryControllerDeleteTest extends TestCase
{
    // use RefreshDatabase;

    public function test_delete_then_response_has_200_status(): void
    {
        $category = Category::factory()->create();
        $response = $this->getJson(route('category.delete', $category->id));

        $response->assertStatus(200);
    }
}