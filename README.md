## Description
[cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable) Easy creation of slugs for your Eloquent models in Laravel.

This project is a very simple demo to show you how to use Laravel eloquent-sluggable quickly.

> This project was created by [The EST Group](http://estgroupe.com) and [PHPHub](https://phphub.org/).

## The Demo

### Screenshots

![](http://ww3.sinaimg.cn/large/0060lm7Tgw1f2ctm9kd1gj30ta0j4q5v.jpg)

![](http://ww3.sinaimg.cn/large/0060lm7Tgw1f2ctmg9qv3j31400kwtco.jpg)

### Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

### Usage Scenarios

If you have an article that title called "My Dinner With Andr Fran OIS E & C", then you'll get the url like this:

	http://example.com/post/My+Dinner+With+Andr%C3%A9+%26+Fran%C3%A7ois

When you use [cviebrock/eloquent-sluggable](https://github.com/cviebrock/eloquent-sluggable), the converted URL as follows:

	http://example.com/post/my-dinner-with-andre-francois
	
As you can see, eloquent-sluggable would make the URL readable and SEO friendly.

## The Tutorial

### Table of contents

1. Installation
2. Updating your Eloquent Models
3. Basic Usage

### 1. Installation

1). To get started with eloquent-sluggable, add to your `composer.json` file as a dependency:

```shell
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

```shell
php artisan sluggable:table posts
```

After generating the migration, you will need to rebuild composer's auto-loader
and run the migration:

```shell
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

And so is retrieving the slug:

```php
echo $post->slug;
```

That's it! :beers: :beers: :beers:

You can refer to the [documentation](https://github.com/cviebrock/eloquent-sluggable#installation) to learn more about Laravel Eloquent Sluggable.

---

欢迎关注 `LaravelTips`, 这是一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)
