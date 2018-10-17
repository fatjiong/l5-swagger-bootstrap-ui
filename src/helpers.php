<?php

use L5SwaggerBootStrapUi\Exceptions\L5SwaggerBootStrapUiException;

if (!function_exists('l5_swagger_bootstrap_ui_dist_path')) {
    /**
     * Returns swagger-ui composer dist path.
     *
     * @param null $asset
     *
     * @return string
     * @throws \L5SwaggerBootStrapUi\Exceptions\L5SwaggerBootStrapUiException
     */
    function l5_swagger_bootstrap_ui_dist_path($asset = null)
    {

        $path = base_path('vendor/x-class/l5-swagger-bootstrap-ui/resources/static/');

        if (!$asset) {
            return realpath($path);
        }


        return realpath($path . $asset);
    }
}

if (!function_exists('l5_swagger_bootstrap_ui_asset')) {
    /**
     * Returns asset from swagger-ui composer package.
     *
     * @param $asset string
     *
     * @return string
     * @throws \L5SwaggerBootStrapUi\Exceptions\L5SwaggerBootStrapUiException
     */
    function l5_swagger_bootstrap_ui_asset($asset)
    {
        $file = l5_swagger_bootstrap_ui_dist_path($asset);

        if (!file_exists($file)) {
            throw new L5SwaggerBootStrapUiException(sprintf('Requested L5-Swagger-BootStrap-UI asset file (%s) does not exists', $asset));
        }

        return route('l5-swagger-bootstrap-ui.asset', $asset) . '?v=' . md5_file($file);
    }
}
