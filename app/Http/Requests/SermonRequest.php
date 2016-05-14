<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SermonRequest extends Request
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
            'title'         => 'required|unique:sermons',
            'fecha'         => 'required',
            'id_month'      => 'required',
            'id_year'       => 'required',
            'id_preacher'   => 'required',
            'audio'         => 'required',
            'estatus'       => 'required'
        ];
    }
}
