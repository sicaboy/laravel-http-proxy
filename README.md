Laravel HTTP Proxy Pool
==========

[![Build Status](https://travis-ci.org/sicaboy/laravel-http-proxy.svg?branch=master&style=flat-square)](https://travis-ci.org/sicaboy/laravel-http-proxy)
[![Latest Stable Version](https://poser.pugx.org/sicaboy/laravel-http-proxy/v/stable)](https://packagist.org/packages/sicaboy/laravel-http-proxy)
[![Total Downloads](https://poser.pugx.org/sicaboy/laravel-http-proxy/downloads)](https://packagist.org/packages/sicaboy/laravel-http-proxy)
[![Latest Unstable Version](https://poser.pugx.org/sicaboy/laravel-http-proxy/v/unstable)](https://packagist.org/packages/sicaboy/laravel-http-proxy)
[![License](https://poser.pugx.org/sicaboy/laravel-http-proxy/license)](https://packagist.org/packages/sicaboy/laravel-http-proxy)

## Installation

```
composer require sicaboy/laravel-http-proxy
```

## Setup Service

https://github.com/jhao104/proxy_pool

## Laravel 5

### Setup

**_NOTE_** This package supports the auto-discovery feature of Laravel 5.5, So skip these `Setup` instructions if you're using Laravel 5.5.

In `app/config/app.php` add the following :

1- The ServiceProvider to the providers array :

```php
Sicaboy\LaravelHttpProxy\HttpProxyServiceProvider::class,
```

2- The class alias to the aliases array :

```php
'HttpProxy' => Sicaboy\LaravelHttpProxy\Facades\HttpProxy::class,
```

3- Publish the config file

```ssh
php artisan vendor:publish --provider="Sicaboy\LaravelHttpProxy\HttpProxyServiceProvider"
```

### Configuration

Add lines in **.env** file :

```
HTTP_PROXY_PROTOCOL=http
HTTP_PROXY_HOST=127.0.0.1
HTTP_PROXY_PORT=5010
HTTP_PROXY_CACHE_ENABLED=false
HTTP_PROXY_CACHE_KEY=laravel-http-proxy
HTTP_PROXY_CACHE_TTL=300
```

### Usage

#### Init js source

### Testing

## Contribute

https://github.com/sicaboy/laravel-http-proxy/pulls