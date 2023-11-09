<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Tag\TagController;

class GetTagsController extends TagController {
    public function __invoke() {
       return $this->getTags();
    }
}
