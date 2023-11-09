<?php

namespace App\Http\Controllers\Tag;

class DeleteTagsController extends TagController {
    public function __invoke() {
        return $this->deleteTags();
    }
}
