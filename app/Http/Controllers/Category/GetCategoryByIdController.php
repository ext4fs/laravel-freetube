<?php

namespace App\Http\Controllers\Category;
/**
 * @OA\Get(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class GetCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId) {
        return $this->getCategoryById($categoryId);
    }
}
