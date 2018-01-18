<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\MissingExtensionException;

class MissingExtensionExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\MissingExtensionException
*/
protected $missingExtensionException;

public function setUp()
{
    parent::setUp();

    $this->missingExtensionException = new \Monolog\Handler\MissingExtensionException();
}
}
