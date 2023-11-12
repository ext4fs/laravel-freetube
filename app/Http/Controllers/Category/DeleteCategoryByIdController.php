<?php

namespace App\Http\Controllers\Category;
use App\Http\Requests\Category\DeleteCategoryByIdRequest;

/**
 * @OA\Delete(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     summary="delete a category by given id",
 *     security={{ "bearerAuth": {}}},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, DeleteCategoryByIdRequest $request) {
        return $this->deleteCategoryById($categoryId, $request);
    }
}
