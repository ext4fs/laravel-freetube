<?php

namespace App\Http\Requests\Post;

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
        return true;
    }

    public function rules(): array {
        return [
            //
        ];
    }
}
