<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('l5-swagger.api.title')}}</title>
    <link rel="shortcut icon" href="{{ l5_swagger_bootstrap_ui_asset('api.ico') }}"/>
    <script src="{{ l5_swagger_bootstrap_ui_asset('jquery1.9.1.js') }}"></script>
    <link href="{{ l5_swagger_bootstrap_ui_asset('bootstrap3.3.7.min.css') }}" rel="stylesheet">
    <link href="{{ l5_swagger_bootstrap_ui_asset('jquery1.2.3.jsonview.min.css') }}" rel="stylesheet">
    <script src="{{ l5_swagger_bootstrap_ui_asset('jquery1.2.3.jsonview.min.js') }}"></script>

    <script src="{{ l5_swagger_bootstrap_ui_asset('sweetalert.min.js') }}"></script>
    <link href="{{ l5_swagger_bootstrap_ui_asset('swagger-ui.css') }}" rel="stylesheet">

</head>
<body class="container-fluid">
<div class="row">
    <div class="col-sm-3 col-md-2 sidebar no-padding sidebar">
        <ul class="nav nav-list" id="menu">
            <li>
                <a href="javascript:void(0)">
                    <i class="icon-text-width"></i>
                    <span class="menu-text"> 简介 </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 no-padding main" id="content">
        <table class="table table-hover table-bordered table-text-center">
            <thead>
            <tr>
                <th colspan="2" style="text-align:center">{{config('l5-swagger.api.title')}}</th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th class="active" width="15%">项目名称</th>
                <td style="text-align: left">L5-Swagger-Bootstrap-UI RESTful APIs</td>
            </tr>
            <tr>
                <th class="active">简介</th>
                <td style="text-align: left">L5-Swagger-Bootstrap-UI RESTful APIs</td>
            </tr>
            <tr>
                <th class="active">作者</th>
                <td style="text-align: left"><a href="https://github.com/laraveler" target="_blank">https://github.com/laraveler</a>
                </td>
            </tr>
            <tr>
                <th class="active">版本</th>
                <td style="text-align: left"></td>
            </tr>
            <tr>
                <th class="active">host</th>
                <td style="text-align: left"></td>
            </tr>
            <tr>
                <th class="active">服务url</th>
                <td style="text-align: left"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="{{ l5_swagger_bootstrap_ui_asset('bootstrap3.3.7.min.js') }}"></script>

<script>
    window.docUrl = "{!! $urlToDocs !!}";
</script>
<script type="text/javascript" src="{{ l5_swagger_bootstrap_ui_asset('swagger-ui.js') }}"></script>

</body>
</html>
