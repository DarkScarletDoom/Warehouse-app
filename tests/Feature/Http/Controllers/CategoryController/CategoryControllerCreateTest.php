<?php

namespace Http\Controllers\CategoryController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryControllerCreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_correct_request_then_response_has_200_status() : void
    {
        $response = $this->postJson(route('category.store'), [
            'name' => 'category_name',
        ]);

        $response->assertOk();
    }

    public function test_correct_request_then_response_has_correct_structure(): void
    {
        $response = $this->postJson(route('category.store'), [
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
