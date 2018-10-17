<?php

namespace L5SwaggerBootStrapUi\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class SwaggerAssetController extends BaseController
{
    public function index($asset)
    {
        $path = l5_swagger_bootstrap_ui_dist_path($asset);

        switch ((pathinfo($asset))['extension']) {
            case 'css':
                $contentType = 'text/css';
                break;
            case 'js':
                $contentType = 'application/javascript';
                break;
            default:
                $contentType = '';
                break;
        }

        return (new Response(
            file_get_contents($path), 200, [
                'Content-Type' => $contentType,
            ]
        ))->setSharedMaxAge(31536000)
            ->setMaxAge(31536000)
            ->setExpires(new \DateTime('+1 year'));
    }
}
