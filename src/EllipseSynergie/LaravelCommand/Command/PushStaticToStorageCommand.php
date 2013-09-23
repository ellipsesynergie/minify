<?php namespace EllipseSynergie\LaravelCommand\Command;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Package service provider
 *
 * @author Maxime Beaudoin <maxime.beaudoin@ellipse-synergie.com>
 * @author Dominic Martineau <dominic.martineau@ellipse-synergie.com>
 * @todo make this WORKING !!
 */
class PushStaticToStorageCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'ellipse:pushstatic';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Push static files to Amazon S3.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		//@todo put this in config
		$this->_base_dir = __DIR__ . '/../../public/';

		$now = time();

		//@todo finish this
		$version_exists = true;
		
		// Validate that version doesn't exist!
		if ($version_exists) {

			// Version exists. Ask user if he wants to continue...
			//@todo change the way to get the app version
			if (!$this->confirm('Version ' . Config::get('app.version') . ' already exists. Do you wish to continue? [yes|no]')) {
			    
			    $this->line('End.');
			    exit;
			}
		}

		if ($this->option('minify') == 'yes') {
			$this->call('ellipse:minifycss');
			$this->call('ellipse:minifyjs');
		}

		//@todo put all path value to condif
		switch ($this->option('type')) {

			case 'css':
				$this->_push('CSS', 'assets/css/');
				break;

			case 'fonts':
				$this->_push('Fonts', 'assets/fonts/');
				break;

			case 'img':
				$this->_push('Images', 'assets/img/');
				break;

			case 'js':
				$this->_push('Javascripts', 'assets/js/');
				break;

			case 'plugins':
				$this->_push('Plugins', 'assets/plugins/');
				break;

			case 'favicons':
				$this->_push('Favicons', 'favicons/');
				break;

			case 'mathjax':
				$this->_push('MathJax', 'assets/mathjax/');
				break;

			default:
				$this->_push('CSS', 'assets/css/');
				$this->_push('Fonts', 'assets/fonts/');
				$this->_push('Images', 'assets/img/');
				$this->_push('Javascripts', 'assets/js/');
				$this->_push('Plugins', 'assets/plugins/');
				$this->_push('Favicons', 'favicons/');
				break;
		}

		$diff = \Carbon\Carbon::createFromTimeStamp($now)->diffForHumans();
		$this->info('Command started ' . $diff);
	}

	/**
	 * Push files
	 *
	 */
	private function _push($title, $dir_to_scan)
	{
		$this->info('Pushing ' . $title . '...');

		//@todo add the code for pushin

	} // _pushCss()

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('type', null, InputOption::VALUE_REQUIRED, 'all,css,fonts,img,js,plugins,favicons', null),
			array('minify', null, InputOption::VALUE_OPTIONAL, 'yes,no', null),
		);
	}

}