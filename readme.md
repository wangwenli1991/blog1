
添加composer debugbar
首先引入扩展包执行这个命令
composer require barryvdh/laravel-debugbar
在config/app.php的provider中添加
Barryvdh\Debugbar\ServiceProvider::class,
在aliens中添加
'Debugbar' => Barryvdh\Debugbar\Facade::class,

在执行就可以了
php artisan vendor:publish


添加laravel-admin后台登录模块
首先执行命令引入安装包
Laravel 5.1, not maintained
composer require encore/laravel-admin "1.1.*"

Laravel 5.2
composer require encore/laravel-admin "1.2.*"

Laravel 5.3
composer require encore/laravel-admin "1.3.*"

Laravel 5.4
composer require encore/laravel-admin "1.4.*"
然后添加这个serviceprovider
Encore\Admin\Providers\AdminServiceProvider::class
在执行
php artisan vendor:publish --tag=laravel-admin
最后一步安装
php artisan admin:install
就可以了
要是不明白就来问我,免费解答,QQ1527179450

db:db
可以直接在modelfactory.php
factory(App\User::class, 50)->create()->each(function ($u) {
    $u->posts()->save(factory(App\Post::class)->make());
});

手动
DatabaseSeeder.php 
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
