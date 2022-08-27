<?php

namespace App\Http\Requests;
use App\Http\Requests\formularioRequest;
use Illuminate\Foundation\Http\FormRequest;

class formularioRequest extends FormRequest
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
            'nombre'=> 'bail|required|alpha',
            'descripcion'=> 'bail|required|',
            'ubicación'=> 'bail|required|',
            'como_llegar'=> 'bail|required|',
            'recomendaciones'=> 'bail|required|',
            'horarios_de_visitas'=>'bail|required|',
            'restrincciones'=> 'bail|required|',
            'costo'=> 'bail|required|numeric',
            'insertar_fotos'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ];
    }
}
