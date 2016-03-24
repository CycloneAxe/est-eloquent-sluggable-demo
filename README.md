## Description
[cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) Easy creation of slugs for your Eloquent models in Laravel.

This project is very simple demo to show you how to use Laravel eloquent-sluggable quickly.

> This project was created by [The EST Group](http://est-group.org/) and [PHPHub](https://phphub.org/).

### Screenshots

![](http://ww4.sinaimg.cn/large/0060lm7Tgw1f27x4g928dj319s0x4q8p.jpg)

### Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

### 1. Installation

1). To get started with eloquent-sluggable, add to your `composer.json` file as a dependency:

```sh
composer require cviebrock/eloquent-sluggable
```

2). Integration in Laravel

Add the service provider to providers:

```php
'providers' => [
    // ...
    'Cviebrock\EloquentSluggable\SluggableServiceProvider',
],
```

Finally, from the command line again, run `php artisan vendor:publish` to publish 
the default configuration file.

### 2. Updating your Eloquent Models

Your models should implement Sluggable's interface and use it's trait. You should 
also define a protected property `$sluggable` with any model-specific configurations 
(see [Configuration](#config) below for details):

```php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'title',
		'save_to'    => 'slug',
	];

}
```

Of course, your database will need a column in which to store the slug. You can do 
this manually, or use the built-in artisan command to create a migration for you. 
For example:

```sh
php artisan sluggable:table posts
```

After generating the migration, you will need to rebuild composer's auto-loader
and run the migration:

```sh
composer dump-autoload
php artisan migrate
```

### 3. Basic Usage

```php
$post = new Post([
	'title' => 'My Awesome Blog Post',
]);

$post->save();
```

That's it! :beers: :beers: :beers:

You can refer to the [documentation](http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html) to learn more about Laravel Breadcrumbs.

---

欢迎关注 `LaravelTips`, 这是一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)
