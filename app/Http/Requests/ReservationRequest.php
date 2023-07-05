<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
    public function rules()
    {
        return [
            'date' => [
                'required'
            ],
            'phone' =>[
                'required'
            ]
        ];
    }
    public function messages()
    {
        return[
            'date.required'=>'يرجى ادخال تاريخ الحجز',
            'phone.required'=>'يرجى ادخال رقم التواصل',
        ];
    }
}
