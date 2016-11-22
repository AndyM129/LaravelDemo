# Laravel Demo - Book Store

As title, this is a Laravel Demo.

这是一个 [Laravel PHP Framework](http://www.golaravel.com)的Demo，仅供学习。






## 开发日志
- BaseFramwork 基础框架
    - 时区改为了北京
    - 添加用户登录模块
    - jQuery 和 BootStrap 替换为了国内的 CDN，更快更稳定了
    - 自定义404错误页
- 2016.11.22
    - 添加"分类"模块及展示




## 开发流程

### 运行

```Linux
cd <该项目路径>
php -S 127.0.0.1:<端口号> -t public

例：
cd /Users/andy/Documents/Workspace/Developer/GitHub/LaravelDemo
php -S andy.local:8999 -t public
```

### 创建Model及其数据库表
```
// UserInfo 用户信息
php artisan make:model UserInfo
php artisan make:migration create_user_infos_table

// Order 订单
php artisan make:model Order

// Book 书籍
php artisan make:model Book

// Category 分类
php artisan make:model Category
php artisan make:migration create_categories_table

// OrderItem 订单项
php artisan make:model OrderItem

// 以上各Model类完成创建, 属性添加, 数据库表字段添加后执行提交
php artisan migrate
```




## 相关教程

- [2016 版 Laravel 系列入门教程](http://www.golaravel.com/post/2016-ban-laravel-xi-lie-ru-men-jiao-cheng-yi/)






# 补充: Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
