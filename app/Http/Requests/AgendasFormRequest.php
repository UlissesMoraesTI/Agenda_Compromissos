<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendasFormRequest extends FormRequest
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
            'nome' => 'required|min:2',
            'data' => 'required|date|after_or_equal:start_date',
            'horaini' => 'required',
            'horater' => 'required',
            'local' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome Obrigatório!',
            'nome.min' => 'Nome Inválido! Informar no mínimo dois Caracteres.',

            'data.required' => 'Data Obrigatória!',
            'data.date' => 'Data Inválida!',
            'data.after_or_equal:start_date' => 'Data deve ser Maior ou Igua a Hoje!',
            'horaini.required' => 'Hora Inicial Obrigatória!',
            'horater.required' => 'Hora Término Obrigatória!',
            'local.required' => 'Local Obrigatório!',
        ];
    }
}
