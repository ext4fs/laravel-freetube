<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;

/**
 * @OA\Tag(
 *     name="Category",
 *     description="endpoints for interacting with categories",
 * )
 */
class CategoryController extends Controller {
    public function getCategories() {
        $categories = Category::all();
        return $categories;
    }

    public function getCategoryById(int $categoryId) {
        $category = Category::find($categoryId);
        return $category;
    }

    public function createCategory(CreateCategoryRequest $request) {
        $data = $request->input();
        $category = Category::create($data);
        return $category;
    }

    public function updateCategoryById(int $categoryId, UpdateCategoryRequest $request) {
        $data = $request->input();
        $category = Category::find($categoryId);
        $category->update($data);
        return $category;
    }

    public function deleteCategories() {
        $categories = Category::truncate();
        return $categories;
    }

    public function deleteCategoryById(int $categoryId) {
        $category = Category::destroy($categoryId);
        return $category;
    }

}
