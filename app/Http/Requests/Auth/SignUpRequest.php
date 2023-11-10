<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="SignUpRequest",
 *     @OA\Property (
 *          property="name",
 *          type="string",
 *     ),
 *     @OA\Property (
 *          property="email",
 *          type="string",
 *     ),
 *     @OA\Property (
 *          property="password",
 *          type="string"
 *     )
 * )
 *
 */
class SignUpRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'name' => ['required', 'alpha_num:ascii'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }
}
