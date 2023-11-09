<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\CategoryController;

class GetCategoriesController extends CategoryController {
    public function __invoke() {
        return $this->getCategories();
    }
}
