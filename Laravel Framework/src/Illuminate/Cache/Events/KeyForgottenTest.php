<?php

namespace tests\Illuminate\Cache\Events;

use Illuminate\Cache\Events\KeyForgotten;
use Mockery as m;

class KeyForgottenTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\Events\KeyForgotten
*/
protected $keyForgotten;

public function setUp()
{
    parent::setUp();

    $this->keyForgotten = new \Illuminate\Cache\Events\KeyForgotten();
}
}
