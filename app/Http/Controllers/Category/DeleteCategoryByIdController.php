<?php

namespace App\Http\Controllers\Category;
/**
 * @OA\Delete(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId) {
        return $this->deleteCategoryById($categoryId);
    }
}
