<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class DeleteUserByIdRequest extends FormRequest {
    public function authorize(): bool {
        $model = User::find($this->route('userId'))->get();
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
