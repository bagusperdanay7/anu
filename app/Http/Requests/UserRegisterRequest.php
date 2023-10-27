<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:191'],
            'username' => ['required', 'unique:users,username', 'between:3,191', 'alpha_dash:ascii'],
            'email' => ['required', 'email:dns', 'max:191', 'unique:users,email'],
            'password' => ['required', Password::min(8)->letters()
                                                ->mixedCase()
                                                ->numbers()
                                                ->symbols()
                                                ->uncompromised()
                        ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name harus diisi!',
            'name.max' => 'Name tidak boleh lebih dari :max karakter!',
            'username.required' => 'Username harus diisi!',
            'username.unique' => 'Username telah digunakan!',
            'username.between' => 'Username tidak boleh kurang dari :min dan lebih dari :max karakter!',
            'username.alpha_dash' => 'Username hanya boleh berisi huruf, angka, tanda hubung dan garis bawah!',
            'email.unique' => 'Email telah digunakan!',
            'password.required' => 'Password harus diisi!',
            'password' => [
                'min' => 'Password harus berisi 8 karakter',
                'letters' => 'Password harus berisi setidaknya satu karakter.',
                'mixed' => 'Password harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
                'numbers' => 'Password harus berisi setidaknya satu angka.',
                'symbols' => 'Password harus berisi setidaknya satu simbol.',
                'uncompromised' => 'Password yang anda masukkan muncul dalam kebocoran data. Sebaiknya masukkan password yang berbeda.',
            ]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response([
            "errors" => $validator->getMessageBag()
        ], 400));
    }
}
