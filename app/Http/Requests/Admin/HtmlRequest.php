<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HtmlRequest extends FormRequest
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
            'hari' => 'required',
            'tanggal' => 'required',
            'judul' => 'required|max:255',
            'sub_judul' => 'required',
            'isi_content' => 'required',
            'foto' => 'required'
        ];
    }
}
