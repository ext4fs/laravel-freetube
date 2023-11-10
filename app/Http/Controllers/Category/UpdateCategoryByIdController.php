<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\UpdateCategoryRequest;

class UpdateCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, UpdateCategoryRequest $request) {
        return $this->updateCategoryById($categoryId, $request);
    }
}
