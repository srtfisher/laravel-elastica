Elastica for Laravel 4
===========================
[![Build Status](http://img.shields.io/travis/srtfisher/laravel-elastica.svg?style=flat)](http://travis-ci.org/srtfisher/laravel-elastica)

This is a Laravel 4 Service Provider for the [Elastica](http://elastica.io/) Elasticsearch Client

## Installation
Require laravel-elastica in composer.

```bash
composer require srtfisher/laravel-elastica:0.*
```

Add it to your providers in `config/app.php`

```
'Srtfisher\LaravelElastica\LaravelElasticaServiceProvider'
```

Add it to your aliases:

```php
'Es' => 'Srtfisher\LaravelElastica\LaravelElasticaFacade'
```

Okay, you would be good to go.

## Configuration
You can use the default configuration to connect to your `localhost:9200` server.
Or you could publish the configuration and change the server.

```bash
$ php artisan config:publish srtfisher/laravel-elastica
```

The configuration will be passed to the client constructor. Information on Elastica
configuration can be found at <http://elastica.io/getting-started/installation.html>.
