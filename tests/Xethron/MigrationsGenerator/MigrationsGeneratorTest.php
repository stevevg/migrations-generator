<?php namespace Xethron\MigrationsGenerator;

use Mockery;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_TestCase;

class MigrationsGeneratorTest extends TestCase {

  public function tearDown()
  {
    Mockery::close();
  }

  /**
  * @test
  */
  public function registers_migrations_generator()
  {
    
  }
}
