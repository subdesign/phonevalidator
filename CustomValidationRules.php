<?php namespace Your\Namespace;

class CustomValidationRules extends \Illuminate\Validation\Validator {

    public function validatePhone($attribute, $value, $parameters)
    {
        return preg_match("/^([0-9\s\-\+\(\)]*)$/", $value);
    }

}