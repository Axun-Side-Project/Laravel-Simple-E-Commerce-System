<?php

namespace App\Domains\Customer\Http\Requests;

use App\Domains\Auth\Rules\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class CreateCustomerRequest.
 *
 * @extends FormRequest
 */
class CreateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'phone' => ['nullable'],
            'active' => ['nullable'],
        ];
    }
}
