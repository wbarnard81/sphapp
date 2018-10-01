<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerCreateRequest extends FormRequest
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
            'serialnumber' => 'required',
            'username' => 'required',
            'email' => 'required',
            'hostname' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'cpumodel' => 'required',
            'memory' => 'required',
            'officetype' => 'required',
            'officekey' => 'required',
        ];
    }
}
