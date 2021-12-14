<?php

namespace App\Http\Requests\ProductSerial;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductSerialRequest extends FormRequest
{
    protected $redirectRoute = 'dashboard.products.create';

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
            'product_id' => 'required|exists:products,id',
            'production_date' => 'required|date',
            'expiration_date' => 'required|date',
            'qty' => 'required|numeric|min:0',
        ];
    }
}
