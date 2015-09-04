#Filemanager for Laravel 4
Based on https://github.com/simogeo/Filemanager

##Requires

"intervention/image": "2.*"

##Installation

Edit your `composer.json`.

	"require": {
		"Vovanmix/filemanager-laravel": "1.*"
	}

Run

	composer update

Add to your file app.php

	'Vovanmix\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Add in routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});

Copy your filemanager folder to public

	php artisan asset:publish --path="vendor/Vovanmix/filemanager-laravel/public" "../"
