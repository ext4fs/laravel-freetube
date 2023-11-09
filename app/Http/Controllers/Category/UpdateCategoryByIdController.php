<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\CategoryController;
use App\Http\Requests\UpdateCategoryRequest;

class UpdateCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId, UpdateCategoryRequest $request) {
        return $this->updateCategoryById($categoryId, $request);
    }
}
