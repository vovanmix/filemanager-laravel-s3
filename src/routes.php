<?php
Route::group(array('before' => 'auth'), function(){
	Route::controller('filemanager', 'FilemanagerLaravelController');
});