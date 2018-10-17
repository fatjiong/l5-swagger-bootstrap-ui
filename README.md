# l5-swagger-bootstrap-ui

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE)

## 简介

`l5-swagger-bootstrap-ui`是`Swagger`的前端UI实现,目的是替换`Swagger`默认的UI实现`Swagger-UI`,使文档更友好一点儿....

`l5-swagger-bootstrap-ui` 只是`Swagger`的UI实现,并不是替换`Swagger`功能,所以后端模块依然是依赖`Swagger`的,需要配合`Swagger`的注解达到效果

## 声明

`l5-swagger-bootstrap-ui` 的前端界面使用bootstrap实现

Javascript逻辑参考项目 [https://github.com/xiaoymin/Swagger-Bootstrap-UI](https://github.com/xiaoymin/Swagger-Bootstrap-UI)已经获得作者授权。

项目依赖于 [https://github.com/DarkaOnLine/L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger)，
安装`l5-swagger-bootstrap-ui`的时候，`L5-Swagger`会被自动安装，关于`L5-Swagger`的配置及`api-docs.json`文件的生成，
都参考`L5-Swagger`[https://github.com/DarkaOnLine/L5-Swagger/blob/master/README.md](使用说明)。



## 安装方法


* 首先composer需要引入`x-class/l5-swagger-bootstrap-ui`包,如下：

`composer require x-class/l5-swagger-bootstrap-ui`

* Laravel>=5.5以上版本会自动引用Provider

* 需要先运行`L5-Swagger`的publish命令生成配置文件

`php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`

* 再运行`l5-swagger-bootstrap-ui`的publish命令生成视图文件

`php artisan vendor:publish --provider "L5SwaggerBootStrapUi\L5SwaggerBootStrapUiServiceProvider"`

* 最后再相关的控制器文件中编写Swagger注释后，运行`api-docs.json`文件生成命令

`php artisan l5-swagger:generate`

* 浏览器打开网址`http://youdomain/api/documentation`即可访问，如果要修改网址或其他配置信息，
请参考`L5-Swagger`[https://github.com/DarkaOnLine/L5-Swagger/blob/master/README.md](使用说明)


## 注意：

生成`api-docs.json`文件的时候可能会的报错，主要是`L5-Swagger`依赖的`Swagger`版本导致的，
如果你的`swagger-php>=3.0`

请修改`.env`文件增加 `SWAGGER_VERSION=3.0` 

或者`config/l5-swagger.php`中的`2.0`改为`3.0`

`'swagger_version' => env('SWAGGER_VERSION', '3.0'),`

如果你的`swagger-php<3.0`或者使用的是旧版本的语法 @SWG (SWAGGER annotations) !!!请运行安装旧版本的`swagger-php`

`composer require 'zircote/swagger-php:2.*'`

## 功能


* 接口文档说明,效果图如下：

![](https://static.oschina.net/uploads/space/2018/0716/075136_60JO_254762.png)

* 在线调试功能,效果图如下:

![](https://static.oschina.net/uploads/space/2018/0716/075225_WazR_254762.png)

## Swagger简介

Swagger 是一个规范和完整的框架，用于生成、描述、调用和可视化 RESTful 风格的 Web 服务。总体目标是使客户端和文件系统作为服务器以同样的速度来更新。文件的方法，参数和模型紧密集成到服务器端的代码，允许API来始终保持同步。Swagger 让部署管理和使用功能强大的API从未如此简单。

Swagger-UI默认效果图如下：



![](https://static.oschina.net/uploads/img/201209/19062008_PluY.png)
