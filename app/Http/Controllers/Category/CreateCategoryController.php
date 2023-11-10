<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\CreateCategoryRequest;

class CreateCategoryController extends CategoryController {
    public function __invoke(CreateCategoryRequest $request) {
        return $this->createCategory($request);
    }
}
