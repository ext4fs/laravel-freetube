<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class GetPostsByTagIdRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}