<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required','max:50'],
            'description' => 'required',
            'file' => ['required','max:100','mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان مورد نظر خود را انتخاب کنید',
            'title.max' => 'عنوان مورد نظر باید بیش از 2 کارامتر باشد',
            'description.required' =>'لطفا توضیحات مورد نظر خود را وارد کنید',
            'file.required' => 'لطفا تصویر خود را وارد کنید',
            'file.max' =>'حجم تصویر شما نباید بیش ز یک مگابایت باشد.',
            'file.mimes' =>'تصمیر شما باید از نوع jgeg ، png و یا jpg باشد'
        ];
    }
}
