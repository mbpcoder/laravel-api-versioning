<?php

namespace MbpCoder\ApiVersioning;

use Illuminate\Routing\Route;

class ApiVersioning
{
    public function __construct()
    {
        // Simplest way to create fallback for api versions
        $validators = Route::getValidators();
        $validators[] = new UriValidator();
        Route::$validators = array_filter($validators, function ($validator) {
            return get_class($validator) != \Illuminate\Routing\Matching\UriValidator::class;
        });
    }
}
