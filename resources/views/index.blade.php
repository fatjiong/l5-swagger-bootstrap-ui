<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('l5-swagger.api.title')}}</title>
    <link rel="shortcut icon" href="{{ l5_swagger_bootstrap_ui_asset('api.ico') }}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jsonview/1.2.3/jquery.jsonview.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jsonview/1.2.3/jquery.jsonview.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                <th colspan="2" style="text-align:center">Swagger-Bootstrap-UI-前后端api接口文档</th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th class="active" width="15%">项目名称</th>
                <td style="text-align: left">Swagger-Bootstrap-UI RESTful APIs</td>
            </tr>
            <tr>
                <th class="active">简介</th>
                <td style="text-align: left">Swagger-Bootstrap-UI RESTful APIs</td>
            </tr>
            <tr>
                <th class="active">作者</th>
                <td style="text-align: left">developer@gmail.com</td>
            </tr>
            <tr>
                <th class="active">版本</th>
                <td style="text-align: left">1.0</td>
            </tr>
            <tr>
                <th class="active">host</th>
                <td style="text-align: left">127.0.0.1:8280</td>
            </tr>
            <tr>
                <th class="active">服务url</th>
                <td style="text-align: left">http://localhost:8800/</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    window.docUrl = "{!! $urlToDocs !!}";
</script>
<script type="text/javascript" src="{{ l5_swagger_bootstrap_ui_asset('swagger-ui.js') }}"></script>

</body>
</html>
