<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="SignUpRequest",
 *     @OA\Property (
 *          property="username",
 *          type="string",
 *     ),
 *     @OA\Property (
 *          property="email",
 *          type="string",
 *          format="email",
 *     ),
 *     @OA\Property (
 *          property="password",
 *          type="string",
 *          format="password",
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
