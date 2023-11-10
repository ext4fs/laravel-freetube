<?php

namespace App\Http\Controllers\Category;

class GetCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId) {
        return $this->getCategoryById($categoryId);
    }
}
