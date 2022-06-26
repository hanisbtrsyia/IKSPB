<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductFormRequest extends FormRequest{

    public function authorize (){
        return true;
    }

    public function rules (){
        return [
            'Harga' => 'numeric',
            'Unit' => 'integer',
            'Berat' => 'integer'
        ];
    }
}

