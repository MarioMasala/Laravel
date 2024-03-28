<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:20',
            'director'=>'required',
            'plot'=>'required|min:10',
            'poster'=>'required|image'
        ];
    }

public function attributes()
{
    return [
        'title'=>'titolo',
        'director'=>'regista',
        'plot'=>'trama',
        
    ];
}

    public function messages(){
        return[
        '*required' =>'E necessario compilare questo campo :attribute',
        ];
    }
}
