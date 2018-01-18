<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Kernel;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Kernel\Danger;

class DangerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Kernel\Danger
*/
protected $danger;

public function setUp()
{
    parent::setUp();

    $this->danger = new \Symfony\Bundle\FrameworkBundle\Tests\Kernel\Danger();
}
}
