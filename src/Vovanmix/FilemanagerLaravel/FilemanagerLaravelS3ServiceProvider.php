<?php namespace Vovanmix\FilemanagerLaravel;

use Illuminate\Support\ServiceProvider;

class FilemanagerLaravelServiceProvider extends ServiceProvider {

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
		$this->package('Vovanmix/FilemanagerLaravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['FilemanagerLaravel'] = $this->app->share( function($app){
			return new FilemanagerLaravel;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('FilemanagerLaravel', 'Vovanmix\FilemanagerLaravel\Facades\FilemanagerLaravelS3');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('FilemanagerLaravel');
	}

}
