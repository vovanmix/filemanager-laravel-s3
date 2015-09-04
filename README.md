#Filemanager for Laravel 4
Based on https://github.com/simogeo/Filemanager

##Requires

"intervention/image": "2.*"

##Installation

Edit your `composer.json`.

	"require": {
		"vovanmix/filemanager-laravel4-s3": "1.*"
	}

Run

	composer update

Add to your file app.php
if you ant to use S3:

	'Vovanmix\FilemanagerLaravel\FilemanagerLaravelS3ServiceProvider',

For store file locally:

	'Vovanmix\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Add in routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});

Copy your filemanager folder to public

	php artisan asset:publish --path="vendor/Vovanmix/filemanager-laravel4-s3/public" "../"
