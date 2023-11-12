<?php

namespace App\Http\Requests\Post;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class DeletePostByIdRequest extends FormRequest
{

    public function authorize(): bool {
        $post = Post::find($this->route('postId'));
        return auth()->id() == $post->author_id;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
