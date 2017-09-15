<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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
            //
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subscription' => 'required',
            'avatar' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You forgot your name!',
            'surname.required' => 'You forgot your surname!',
            'email.required' => 'You forgot your email address!',
            'phone.required' => 'You forgot your phone number!'
        ];
    }
}
