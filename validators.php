<?php

Validator::resolver(function($translator, $data, $rules, $messages)
{
    return new Your\Namespace\CustomValidationRules($translator, $data, $rules, $messages);
});