<?php

namespace App\Http\Requests\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateInsurancePolicyRequest extends FormRequest
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
            'description'          => 'required|string|max:200',
            'default_premium'      => 'required|numeric|decimal:2',
            'terms_and_conditions' => 'required|string',
        ];
    }
}
