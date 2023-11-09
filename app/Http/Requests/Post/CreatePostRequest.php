<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreatePostRequest extends FormRequest {

    public function authorize(): bool {
        return Auth::id() === $this->authorId;
    }

    public function rules(): array {
        return [
            //
        ];
    }
}
