<?php

namespace tests\Psy\Exception;

use Mockery as m;
use Psy\Exception\DeprecatedException;

class DeprecatedExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Exception\DeprecatedException
*/
protected $deprecatedException;

public function setUp()
{
    parent::setUp();

    $this->deprecatedException = new \Psy\Exception\DeprecatedException();
}
}
