
# Base URL
#### Base URL : https://mp-covid19-api.000webhostapp.com/public/api/

Example :  https://mp-covid19-api.000webhostapp.com/public/api/hospital
```json
[
-   {
    -   id_hospital:  8,
    -   name:  "RSUD PALU",
    -   address:  "Jl. Undata",
    -   city:  "Ampana",
    -   longitude:  "0.223",
    -   latitude:  "12.2222",
    -   created_at:  "2020-06-14T05:20:28.000000Z",
    -   updated_at:  "2020-06-14T05:20:28.000000Z"
    }
]
```
```php
$router->group(['prefix' => 'api'], function () use ($router) {

// Rumah Sakit

$router->get('hospitals', 'HospitalController@index');

$router->get('/hospital/{id}', 'HospitalController@show');

$router->post('/hospital/save', 'HospitalController@store');

$router->post('/hospital/{id}/update', 'HospitalController@update');

$router->post('/hospital/{id}/delete', 'HospitalController@destroy');

  

// Posko

$router->get('spots', 'SpotController@index');

$router->get('/spot/{id}', 'SpotController@show');

$router->post('/spot/save', 'SpotController@store');

$router->post('/spot/{id}/update', 'SpotController@update');

$router->post('/spot/{id}/delete', 'SpotController@destroy');

  

// Telepon Darurat

$router->get('dials', 'DialController@index');

$router->get('/dial/{id}', 'DialController@show');

$router->post('/dial/save', 'DialController@store');

$router->post('/dial/{id}/update', 'DialController@update');

$router->post('/dial/{id}/delete', 'DialController@destroy');

  

// Kasus Corona

$router->get('/cases/all', 'CasesController@index');

$router->get('/cases/day', 'CasesController@day');

$router->get('/cases/total', 'CasesController@total');

$router->get('/case/{id}', 'CasesController@show');

$router->post('/case/save', 'CasesController@store');

$router->post('/case/{id}/update', 'CasesController@update');

$router->post('/case/{id}/delete', 'CasesController@destroy');

});
```



# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
