<?php

namespace tests\PHPUnit\Framework\Error;

use Mockery as m;
use PHPUnit\Framework\Error\Warning;

class WarningTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Framework\Error\Warning
*/
protected $warning;

public function setUp()
{
    parent::setUp();

    $this->warning = new \PHPUnit\Framework\Error\Warning();
}
}
