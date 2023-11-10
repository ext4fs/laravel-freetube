<?php

namespace App\Http\Controllers\Category;

class DeleteCategoryByIdController extends CategoryController {
    public function __invoke(int $categoryId) {
        return $this->deleteCategoryById($categoryId);
    }
}
