<?php
namespace Srtfisher\LaravelElastica\Tests;
use Orchestra\Testbench\TestCase;

class LaravelElasticaTest extends TestCase {

  public function testFacadeReturnsInstance()
  {
    // App::make call
    $elastica = $this->app->make('elastica');
    $this->assertInstanceOf('Elastica\Client', $elastica);

    // Facade call
    $index = \Es::getIndex('items');
    $this->assertInstanceOf('Elastica\Client', $elastica);
  }

  protected function getPackageProviders($app = null)
  {
    return ['Srtfisher\LaravelElastica\LaravelElasticaServiceProvider'];
  }

  protected function getPackageAliases($app = null)
  {
    return [
      'Es' => 'Srtfisher\LaravelElastica\LaravelElasticaFacade'
    ];
  }
}
