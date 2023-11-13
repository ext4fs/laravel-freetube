<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\GetCategoryByIdRequest;

/**
 * @OA\Get(
 *     path="/categories/{categoryId}",
 *     tags={"Category"},
 *     summary="get a category by given id",
 *     @OA\Response(response="200", description="a category with given id"),
 * )
 */
class GetCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, GetCategoryByIdRequest $request) {
        return $this->getCategoryById($categoryId, $request);
    }
}
