<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class DeletePostsByAuthorIdRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->id() == $this->route('authorId');
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
