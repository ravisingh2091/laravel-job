<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'marketer_id' => 'required|exists:marketers,id',
            'utility_territory_id' => 'required|exists:utility_territories,id',
            'commodity_id' => 'required|exists:commodities,id',
            'rate' => 'required|numeric|min:0',
            'term_months' => 'required|integer|min:0',
            'secondary_rate' => 'nullable|numeric|min:0',
            'secondary_term_months' => 'nullable|integer|min:0',
            'unit_of_measure' => 'required',
            'next_product_id' => 'nullable|exists:products,id',
            'revenue_class' => 'required',
            'enroll_fee' => 'nullable|numeric|min:0',
            'cancel_fee' => 'nullable|numeric|min:0',
            'enabled' => 'required|boolean',
            'product_type_id' => 'required|exists:product_types,id',
            'website_description' => 'required',
        ];
    }
}
