<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| The directory name relative to the root project directory
	|--------------------------------------------------------------------------
	|
	| A good pratice is to put all files into public/assets
	|
	*/
    'assetsDirectory' => 'public/assets',

	/*
	|--------------------------------------------------------------------------
	| Configurations for minify CSS
	|--------------------------------------------------------------------------
	*/
    'css' => array(

    	/*
    	|--------------------------------------------------------------------------
    	| Directory list of all folder containing css file to minify, relative to assetsDirectory
    	|--------------------------------------------------------------------------
    	*/
        'directories' => array(
            'css'
        ),

    	/*
    	|--------------------------------------------------------------------------
    	| You can pack multiple css file in once. It's recommandated to pack minified files
    	|--------------------------------------------------------------------------
    	*/
        'packages' => array(
            'css/common.pack.css' => array(
                'css/common.min.css'
            )
        ),
    ),

	/*
	|--------------------------------------------------------------------------
	| Configurations for minify JS
	|--------------------------------------------------------------------------
	*/
    'js' => array(

    	/*
    	|--------------------------------------------------------------------------
    	| Directory list of all folder containing js file to minify, relative to assetsDirectory
    	|--------------------------------------------------------------------------
    	*/
        'directories' => array(
            'js'
        ),

    	/*
    	|--------------------------------------------------------------------------
    	| You can pack multiple js file in once. It's recommandated to pack minified files
    	|--------------------------------------------------------------------------
    	*/
        'packages' => array(
            'js/common.pack.js' => array(
                'js/console.min.js',
            )
        )
    )
);