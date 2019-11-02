<?php return [
    // This contains the Laravel Packages that you want this plugin to utilize listed under their package identifiers
    'packages' => [
        'jenssegers/mongodb' => [
            // Service providers to be registered by your plugin
            'providers' => [
             // ...
             Jenssegers\Mongodb\MongodbServiceProvider::class
            ],
            // Aliases to be registered by your plugin in the form of $alias => $pathToFacade
           'aliases' => [
                'Moloquent'       => Jenssegers\Mongodb\Eloquent\Model::class,
            ],

            // The namespace to set the configuration under. For this example, this package accesses it's config via config('purifier.' . $key), so the namespace 'purifier' is what we put here
            // 'config_namespace' => 'purifier',

            //'config_namespace' => 'onesignal',
            
            // The configuration file for the package itself. Start this out by copying the default one that comes with the package and then modifying what you need.
            'config' => [
                                   
                   
                     ]
            ],
        ],
];