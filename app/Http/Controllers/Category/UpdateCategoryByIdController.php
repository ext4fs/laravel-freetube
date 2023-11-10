<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\UpdateCategoryRequest;

/**
 * @OA\Put(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class UpdateCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, UpdateCategoryRequest $request) {
        return $this->updateCategoryById($categoryId, $request);
    }
}
