<?php

namespace tests;

use Mockery as m;
use SimplePie_Core;

class SimplePie_CoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Core
*/
protected $simplePie_Core;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Core = new \SimplePie_Core();
}
}
