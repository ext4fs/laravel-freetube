<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\DeleteCategoriesRequest;

/**
 * @OA\Delete(
 *     path="/categories",
 *     tags={"Category"},
 *     summary="delete all categories",
 *     @OA\Response(response="200", description="success"),
 * )
 */
class DeleteCategoriesController extends CategoryController {
    public function __invoke(DeleteCategoriesRequest $request) {
        return $this->deleteCategories($request);
    }
}
