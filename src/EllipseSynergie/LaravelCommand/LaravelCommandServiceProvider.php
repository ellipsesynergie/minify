<?php namespace EllipseSynergie\LaravelCommand;

use Illuminate\Support\ServiceProvider;

/**
 * Package service provider
 *
 * @author Maxime Beaudoin <maxime.beaudoin@ellipse-synergie.com>
 */
class LaravelCommandServiceProvider extends ServiceProvider {

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
		$this->package('ellipsesynergie/laravel-command');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//Add command to the application
		$this->app['ellipse:minifycss'] = $this->app->share(function($app)
		{
			return new Command\MinifyCssCommand($app);
		});
		
		//Add command to the application
		$this->app['ellipse:minifyjs'] = $this->app->share(function($app)
		{
			return new Command\MinifyJsCommand($app);
		});
		
		//Add command to the application
		$this->app['ellipse:pushtostatic'] = $this->app->share(function($app)
		{
			return new Command\PushStaticToStorageCommand($app);
		});
		
		//Add commands
		$this->commands(
			'ellipse:minifycss',
			'ellipse:minifyjs',
			'ellipse:pushtostatic'
		);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}