<?php namespace Vovanmix\FilemanagerLaravel4S3\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class FilemanagerLaravel extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'FilemanagerLaravel'; }
 
}