<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\CreateCategoryRequest;

/**
 * @OA\Post(
 *     path="/categories",
 *     tags={"Category"},
 *     summary="create a category",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="a category"),
 * )
 */
class CreateCategoryController extends CategoryController {
    public function __invoke(CreateCategoryRequest $request) {
        return $this->createCategory($request);
    }
}
