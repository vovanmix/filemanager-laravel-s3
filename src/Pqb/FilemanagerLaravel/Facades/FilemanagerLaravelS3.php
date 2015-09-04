<?php namespace Vovanmix\FilemanagerLaravel\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class FilemanagerLaravelS3 extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'FilemanagerLaravelS3'; }
 
}