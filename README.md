#Filemanager para Laravel 4
Basado de https://github.com/simogeo/Filemanager

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require": {
		"Vovanmix/filemanager-laravel": "1.*"
	}

Ejecuta

	composer update

Agrega en tu archivo app.php

	'Vovanmix\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Y en el Facade

	'FilemanagerLaravel'=> 'Vovanmix\FilemanagerLaravel\Facades\FilemanagerLaravel',

Agrega en routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});

Copia las carpetas filemanager y tinymce a tu carpeta public

	php artisan asset:publish --path="vendor/Vovanmix/filemanager-laravel/public" "../"

Para que carge tinymce con el plugin filemanager agrega:

```
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
tinymce.init(editor_config);
</script>
```
##Demo
http://www.youtube.com/watch?v=yowJRKZ3Ums
