<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{    
    protected $redirectRoute = 'home';

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'date_in' => 'required|date',
            'date_out' => 'required|date|after_or_equal:date_in',
            'visitors' => 'required|numeric|min:1',
        ];
    }    
}
