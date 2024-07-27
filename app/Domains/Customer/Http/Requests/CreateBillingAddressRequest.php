<?php

namespace App\Domains\Customer\Http\Requests;

use App\Domains\Auth\Rules\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class CreateBillingAddressRequest.
 *
 * @extends FormRequest
 */
class CreateBillingAddressRequest extends FormRequest
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
            'recipient_name' => ['required'],
            'phone_number' => ['required'],
            'postal_code' => ['required'],
            'city' => ['required'],
            'district' => ['required'],
            'address_line1' => ['required'],
            'address_line2' => ['nullable'],
        ];
    }
}
