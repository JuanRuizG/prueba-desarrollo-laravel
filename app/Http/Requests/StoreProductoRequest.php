<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required|integer|min:100',
            'peso' => 'required|integer|min:1',
            'categoria_id' => 'required',
            'stock' => 'required|integer|min:1',
            'fecha_Creacion' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'referencia.required' => 'La referencia es obligatorio',
            'precio.required' => 'El precio es obligatorio',
            'precio.integer' => 'El precio debe ser un entero',
            'precio.min' => 'El precio debe ser 100 o mas',
            'peso.required' => 'El peso es obligatorio',
            'peso.integer' => 'El peso debe ser un entero',
            'peso.min' => 'El peso debe ser 1 o mas',
            'categoria_id.required' => 'La categoria es obligatoria',
            'stock.required' => 'La cantidad del producto obligatorio',
            'stock.integer' => 'La cantidad del producto debe ser un entero',
            'stock.min' => 'La cantidad minima del producto debe ser 1 o mas',
            'fecha_Creacion.required' => 'La fecha de creacion es obligatoria',
            'fecha_Creacion.date' => 'La fecha de creacion debe ser una fecha valida'
        ];
    }
}
