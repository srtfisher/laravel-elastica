<?php
namespace Srtfisher\LaravelElastica;

use Elastica\Client;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Config;

/**
 * Laravel Elastica Service Provider
 *
 * @package laravel-elastica
 */
class LaravelElasticaServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('srtfisher/laravel-elastica');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('elastica', function()
		{
			return new Client(Config::get('elastica::config'));
		});

		// Shortcut so developers don't need to add an Alias in app/config/app.php
		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Es', 'Srtfisher\LaravelElastica\LaravelElasticaFacade');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('elastica');
	}

}
