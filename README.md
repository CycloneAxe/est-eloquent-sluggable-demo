## Description
[cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) Easy creation of slugs for your Eloquent models in Laravel.

This project is very simple demo to show you how to use Laravel eloquent-sluggable quickly.

> This project was created by [The EST Group](http://estgroupe.com) and [PHPHub](https://phphub.org/).

### Screenshots

![](http://ww1.sinaimg.cn/large/0060lm7Tgw1f2crxey706j31900lmq6u.jpg)

![](http://ww4.sinaimg.cn/large/0060lm7Tgw1f2crxoxxyvj31kw0kcjvj.jpg)

### Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

### Scenario Description

If you have a title "My Dinner With Andr Fran OIS E & C" article, it will generate the url:

	http://example.com/post/My+Dinner+With+Andr%C3%A9+%26+Fran%C3%A7ois

When you use [cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) the converted URL as follows:

	http://example.com/post/my-dinner-with-andre-francois
	
Here you can clearly see the converted URL more legible, and more friendly to SEO

## The Tutorial

### Table of contents

1. Installation
2. Updating your Eloquent Models
3. Basic Usage

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

You can refer to the [documentation](https://github.com/cviebrock/eloquent-sluggable#installation) to learn more about Laravel Eloquent Sluggable.

---

欢迎关注 `LaravelTips`, 这是一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)
