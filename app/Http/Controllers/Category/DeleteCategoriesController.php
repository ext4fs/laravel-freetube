<?php

namespace App\Http\Controllers\Category;

/**
 * @OA\Delete(
 *     path="/categories",
 *     tags={"Category"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCategoriesController extends CategoryController {
    public function __invoke() {
        return $this->deleteCategories();
    }
}
