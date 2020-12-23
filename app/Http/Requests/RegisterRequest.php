<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'birth_day' => 'required|date',
            'email' => 'required|email',
            'speciality' => 'required',
            'study_year' => 'required|integer',
            'pass' => 'required|min:8|confirmed'
        ];
    }

    public function messages()
    {
        $required = 'Пожалуйста заполните поле';

        return [
            //required
            'name.required' => $required.' "Имя"',
            'surname.required' => $required.' "Фамилия"',
            'birth_day.required' => $required.' "Дата рождения"',
            'email.required' => $required.' "Email"',
            'speciality.required' => $required.' "Специальность"',
            'study_year.required' => $required.' "Курс"',
            'pass.required' => $required.' "Пароль"',
            //min & max
            'name.max' => 'Максимальное кол-во символов в поле "Имя" 50',
            'surname.max' => 'Максимальное кол-во символов в поле "Фамилия" 50',
            'pass.min' => 'Минимальное кол-во символов в поле "Пароль" 8',
            //confirmed
            'pass.confirmed' => 'Пароли не совпадают',
        ];
    }
}
