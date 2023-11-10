<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\CreateCategoryRequest;

/**
 * @OA\Post(
 *     path="/categories",
 *     tags={"Category"},
 *     @OA\Response(response="200", description="success"),
 * )
 */
class CreateCategoryController extends CategoryController {
    public function __invoke(CreateCategoryRequest $request) {
        return $this->createCategory($request);
    }
}
