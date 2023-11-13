<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\GetCategoriesRequest;

/**
 * @OA\Get (
 *     path="/categories",
 *     tags={"Category"},
 *     summary="get all categories",
 *     @OA\Response(
 *         response="200",
 *         description="all categories"
 *     )
 * )
 */
class GetCategoriesController extends CategoryController {
    public function __invoke(GetCategoriesRequest $request) {
        return $this->getCategories($request);
    }
}
