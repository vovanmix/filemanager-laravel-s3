<?php

namespace Acme\FilemanagerLaravelS3\Controllers;

class FilemanagerS3LaravelController extends \BaseController {
	public function __construct(){
		// $this->beforeFilter('auth');

	}
	public function getShow()
	{
		return \View::make('FilemanagerLaravel::filemanager.index');
	}
	public function getConnectors()
	{
		$f = \FilemanagerLaravel::Filemanager();
		$f->run();
	}
	public function postConnectors()
	{
		$f = \FilemanagerLaravel::Filemanager();
		$f->run();
	}

}
