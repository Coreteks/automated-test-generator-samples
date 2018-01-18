<?php

namespace tests\Illuminate\Cache\Events;

use Illuminate\Cache\Events\CacheMissed;
use Mockery as m;

class CacheMissedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\Events\CacheMissed
*/
protected $cacheMissed;

public function setUp()
{
    parent::setUp();

    $this->cacheMissed = new \Illuminate\Cache\Events\CacheMissed();
}
}
