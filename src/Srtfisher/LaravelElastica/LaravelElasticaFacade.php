<?php
namespace Srtfisher\LaravelElastica;

use Illuminate\Support\Facades\Facade;

/**
 * Facade aka Proxy to Elastica instance
 *
 * @package laravel-elastica
 */
class LaravelElasticaFacade extends Facade {
  protected static function getFacadeAccessor()
  {
    return 'elastica';
  }
}
