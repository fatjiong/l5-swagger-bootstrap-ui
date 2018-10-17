<?php
$router->any(config('l5-swagger.routes.docs') . '/{jsonFile}?', [
    'as'         => 'l5-swagger.docs',
    'middleware' => config('l5-swagger.routes.middleware.docs', []),
    'uses'       => '\L5Swagger\Http\Controllers\SwaggerController@docs',
])->where('jsonFile', '=', config('l5-swagger.paths.docs_json'));

$router->get(config('l5-swagger.routes.docs') . '/ui/{asset}', [
    'as'         => 'l5-swagger-bootstrap-ui.asset',
    'middleware' => config('l5-swagger.routes.middleware.asset', []),
    'uses'       => '\L5SwaggerBootStrapUi\Http\Controllers\SwaggerAssetController@index',
])->where('asset', '(.*)');
