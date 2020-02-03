<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePackage extends FormRequest
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
            'trip_start_date_time'  =>  'required|date_format:Y-m-d H:i:s',
            'trip_end_date_time'    =>  'required|date_format:Y-m-d H:i:s',
            'price_per_head'        =>  'required|numeric'
        ];
    }
}
