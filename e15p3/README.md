# Project 3
+ By: *Shaun Lewis*
+ Production URL: <http://e15p3.budoapps.com/>
+ Project Synopsis: Drink Ordering Website

## Outside resources


[How To Install and Secure Redis on Ubuntu 18.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-redis-on-ubuntu-18-04)

[How to Install the PHP Redis Extension](https://serverpilot.io/docs/how-to-install-the-php-redis-extension/)

[PhpRedis in Laravel - Redis Series Episode 2](https://www.youtube.com/watch?v=UEpyWEbsrkw)

[How to Install Redis on Windows 10](https://www.youtube.com/watch?v=188Fy-oCw4w&t=633s)

[Fullscreen Video Background](https://www.w3schools.com/howto/howto_css_fullscreen_video.asp)

[How to: fullscreen background autoplay video on mobile in 2018](https://medium.com/just-goe-frontend-adventures/how-to-fullscreen-background-autoplay-video-on-mobile-in-2018-208dfee26bc1)

[Bootstrap Form Inputs](https://www.w3schools.com/bootstrap/bootstrap_forms_inputs.asp)

#### Use error pattern as described in lecture.

# This Section Will Be Removed in Final Build
## Redis install
1. Install Redis on Machine

## PHP Redis Install
2. Install [PHP Redis] (https://pecl.php.net/package/redis)
3. Check thread safety type in PHP.info()(Windows)
	a. Enable - Thread Safe
	b. Disabled - Non Thread Safe
4. Choose appropriate php version(x64 or x86). Info located in PHP.info()
5. Add php_redis.dll to ext folder
6. Add extension=php_redis.dll to PHP.ini
7. Confirm redis information in PHP.info

## Laravel Install
8. Download [vetruvet/laravel-phpredis](https://packagist.org/packages/vetruvet/laravel-phpredis)
9. Verify composer.json and vendor folder
10. Change 
```php
'Redis' => Illuminate\Support\Facades\Redis::class to 'LRedis' => Illuminate\Support\Facades\Redis::class
```
11. Modify options-->prefix alias in database.php





