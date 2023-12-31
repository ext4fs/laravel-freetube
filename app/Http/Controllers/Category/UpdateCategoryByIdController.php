<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\UpdateCategoryByIdRequest;

/**
 * @OA\Put(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     summary="update a category by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="updated category with given id"),
 * )
 */
class UpdateCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, UpdateCategoryByIdRequest $request) {
        return $this->updateCategoryById($categoryId, $request);
    }
}
