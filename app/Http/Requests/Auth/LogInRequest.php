<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="LogInRequest",
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
 */
class LogInRequest extends FormRequest {

    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
}
