<?php

namespace App\Http\Controllers\Category;

class DeleteCategoriesController extends CategoryController {
    public function __invoke() {
        return $this->deleteCategories();
    }
}
