<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInsuranceCoverRequest extends FormRequest
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
            'name'          => 'required|string|max:160',
            'description'   => 'required|string',
            'premium'       => 'nullable|numeric|integer',
            'type'          => 'required|string',
            'clause_list'   => 'nullable|array',
            'clause_list.*.name' => 'required|string',
            'clause_list.*.conditions' => 'nullable|array',
            'clause_list.*.conditions.*' => 'required|string',
        ];
    }
}
