<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\FirePHPHandler;

class FirePHPHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\FirePHPHandler
*/
protected $firePHPHandler;

public function setUp()
{
    parent::setUp();

    $this->firePHPHandler = new \Monolog\Handler\FirePHPHandler();
}
}
