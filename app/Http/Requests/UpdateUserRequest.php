<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'usertype' => ['string'],
            'username' => ['string', 'max:100'],
            'lastname' => ['required', 'string', 'max:50'],
            'firstname' => ['required', 'string', 'max:50'],
            'lastname_kana' => ['required', 'string', 'max:50'],
            'firstname_kana' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'birth' => ['required', 'date'],
            'gender' => ['max:5'],
            'phone_number' => ['string', 'max:15'],
            'mobile_number' => ['string', 'max:15'],
            'postcode' => ['required', 'string', 'max:100'],
            'address1' => ['required', 'string', 'max:5'],
            'address2' => ['required', 'string', 'max:50'],
            'address3' => ['required', 'string', 'max:255'],
            'religion' => ['string', 'max:30'],
            'father_name' => ['string', 'max:50'],
            'father_phone_number' => ['string', 'max:15'],
            'mother_name' => ['string', 'max:50'],
            'mother_phone_number' => ['string', 'max:15'],
            'join_date' => ['required', 'date'],
        ];
    }
}
