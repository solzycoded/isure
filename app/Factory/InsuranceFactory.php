<?php

namespace App\Factory;

use Illuminate\Validation\ValidationException;

// This class implements the Factory pattern, the method has no idea what class it's going to return
class InsuranceFactory{
    public static function build($insurancePolicyName, $attributes){
        // depending on the "insurance policy" name
        $insurancePolicyName = ucwords("\\App\\Factory\\" . $insurancePolicyName);

        if(class_exists($insurancePolicyName)){
            return new $insurancePolicyName($attributes);
        }
        else{
            // authentication failed
            throw ValidationException::withMessages([
                'name' => 'The Insurance Policy you provided, is invalid'
            ]);
        }
    }
}