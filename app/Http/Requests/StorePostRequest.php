<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:255'],
            //'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required'
        ];
    }

    /* public function messages()
    {
        return [
            'title.required' => 'El :attribute es obligatorio',
            'title.min' => 'El título debe tener al menos 5 caracteres',
            'title.max' => 'El título no debe exceder los 255 caracteres',
            'slug.required' => 'El slug es obligatorio',
            'slug.unique' => 'El slug ya existe',
            'category.required' => 'La categoría es obligatoria',
            'content.required' => 'El contenido es obligatorio'
        ];
    } */

    /* public function attributes()
    {
        return [
            'title' => 'nombre',
            'slug' => 'slug',
            'category' => 'categoría',
            'content' => 'contenido'
        ];
    } */
}
