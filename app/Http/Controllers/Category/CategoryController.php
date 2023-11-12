<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\DeleteCategoryByIdRequest;
use App\Http\Requests\Category\GetCategoriesRequest;
use App\Http\Requests\Category\GetCategoryByIdRequest;
use App\Http\Requests\Category\UpdateCategoryByIdRequest;
use App\Models\Category;

/**
 * @OA\Tag(
 *     name="Category",
 *     description="endpoints for interacting with categories",
 * )
 * @OA\Schema(
 *     schema="CategoryId",
 *     type="integer",
 *     format="uint32",
 *     description="the unique identifier of a category"
 *   )
 */
class CategoryController extends Controller {
    public function getCategories(GetCategoriesRequest $request) {
        $categories = Category::all();
        return $categories;
    }

    public function getCategoryById(int $categoryId, GetCategoryByIdRequest $request) {
        $category = Category::find($categoryId);
        return $category;
    }

    public function createCategory(CreateCategoryRequest $request) {
        $data = $request->input();
        $category = Category::create($data);
        return $category;
    }

    public function updateCategoryById(int $categoryId, UpdateCategoryByIdRequest $request) {
        $data = $request->input();
        $category = Category::find($categoryId);
        $category->update($data);
        return $category;
    }

    public function deleteCategories(DeleteCategoryByIdRequest $request) {
        $categories = Category::truncate();
        return $categories;
    }

    public function deleteCategoryById(int $categoryId, DeleteCategoryByIdRequest $request) {
        $category = Category::destroy($categoryId);
        return $category;
    }

}
