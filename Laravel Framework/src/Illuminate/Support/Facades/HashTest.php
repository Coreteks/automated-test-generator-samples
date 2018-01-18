<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Hash;
use Mockery as m;

class HashTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Hash
*/
protected $hash;

public function setUp()
{
    parent::setUp();

    $this->hash = new \Illuminate\Support\Facades\Hash();
}
}
