<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        // Buah
        //     Anggur
        //     Apel
        // Daging 
        //     Daging Sapi 
        //     Daging Ayam


        $parentId = (int) $this->get('parent_id');
        $id = (int) $this->get('id');
        
        if ($this->method() == 'PUT') {
            if ($parentId > 0) {
                $name = 'required|unique:products,name,'.$id.',id,parent_id,'.$parentId;
            } else {
                $name = 'required|unique:products,name,'.$id;
            }

            $slug = 'unique:products,slug,'.$id;
       
        } else {
            $name = 'required|unique:products,name,NULL,id,parent_id,'.$parentId;
            $slug = 'unique:products,slug';

        }



        return [
            'name' => $name,
            'slug' => $slug,
        ];
    }
}
