<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Тест поля имя',
            'email.required'=>'You need the description',
            'msg.max'=>'Your name have less than 5 letters?',
        ];
    }
}
