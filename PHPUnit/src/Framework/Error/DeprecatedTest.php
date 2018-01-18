<?php

namespace tests\PHPUnit\Framework\Error;

use Mockery as m;
use PHPUnit\Framework\Error\Deprecated;

class DeprecatedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Error\Deprecated
*/
protected $deprecated;

public function setUp()
{
    parent::setUp();

    $this->deprecated = new \PHPUnit\Framework\Error\Deprecated();
}
}
