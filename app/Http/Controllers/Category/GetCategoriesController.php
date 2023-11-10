<?php

namespace App\Http\Controllers\Category;

/**
 * @OA\Get (
 *     path="/categories",
 *     tags={"Category"},
 *     @OA\Response(
 *         response="200",
 *         description="success"
 *     )
 * )
 */
class GetCategoriesController extends CategoryController {
    public function __invoke() {
        return $this->getCategories();
    }
}
