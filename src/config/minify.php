<?php

return array(

    'assetsDirectory' => 'public/assets',

    'css' => array(

        'directories' => array(
            'css'
        ),

        'packages' => array(

            // Default layout
            'css/common.pack.css' => array(
                'css/common.min.css'
            )
        ),
    ),

    'js' => array(

        'directories' => array(
            'js'
        ),

        'packages' => array(

            // Default layout
            'js/common.pack.js' => array(
                'js/console.min.js',
            )
        )
    )
);