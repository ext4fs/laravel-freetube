<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * @OA\Schema(
 *     schema="CreatePostRequest",
 *     @OA\Property(
 *         property="category_id",
 *         type="integer",
 *     ),
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
class CreatePostRequest extends FormRequest {

    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            //
        ];
    }
}
