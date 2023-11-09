<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\CategoryController;

class GetCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId) {
        return $this->getCategoryById($categoryId);
    }
}
