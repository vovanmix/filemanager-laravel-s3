<?php
class FilemanagerLaravelController extends BaseController {
	public function __construct(){
		// $this->beforeFilter('auth');
		
	}
	public function getShow()
	{
		return View::make('FilemanagerLaravel4S3::filemanager.index');
	}
	public function getConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}
	public function postConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}

}
