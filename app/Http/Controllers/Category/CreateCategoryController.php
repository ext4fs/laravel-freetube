<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\CategoryController;
use App\Http\Requests\CreateCategoryRequest;

class CreateCategoryController extends CategoryController {
    public function __invoke(CreateCategoryRequest $request) {
        return $this->createCategory($request);
    }
}
