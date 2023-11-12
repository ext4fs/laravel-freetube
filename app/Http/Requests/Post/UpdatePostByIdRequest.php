<?php

namespace App\Http\Requests\Post;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="UpdatePostRequest",
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *     ),
 *     @OA\Property (
 *         property="description",
 *         type="string",
 *     )
 * )
 */
class UpdatePostByIdRequest extends FormRequest {

    public function authorize(): bool {
        $post = Post::find($this->route('postId'));
        return auth()->id() === $post->author_id;
    }

    public function rules(): array {
        return [
            'title' => ['string'],
            'description' => ['string']
        ];
    }
}
