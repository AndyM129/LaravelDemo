# Laravel Notes

## 运行方法：

```Linux
cd <该项目路径>
php -S 127.0.0.1:<端口号> -t public

例：
cd /Users/andy/Documents/Workspace/Developer/GitHub/LaravelDemo
php -S andy.local:8999 -t public
```

## 开发

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


