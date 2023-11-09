<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePostRequest extends FormRequest {

    public function authorize(): bool {
        $author_id = $this->input('author_id');
        return Auth::id() == $author_id;
    }

    public function rules(): array {
        return [
            //
        ];
    }
}
