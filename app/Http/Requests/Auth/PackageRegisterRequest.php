<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class PackageRegisterRequest extends FormRequest
{
    
    /**
     * Determine if the user is authorized to make this request.
     */

    public function authorize(): bool
    {
        return true;
    }//$country_num,$mobile_num
    public function rules(): array
    {  
      
       return[
         'package'=>'required|numeric|not_in:0',  
             
         
       ];   
    
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
  
   return[   
      'package.*'=> __('messages.this field is required') ,
      
    ];
    
}

}
