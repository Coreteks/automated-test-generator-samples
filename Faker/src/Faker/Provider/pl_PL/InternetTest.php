<?php

namespace tests\Faker\Provider\pl_PL;

use Faker\Provider\pl_PL\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pl_PL\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\pl_PL\Internet();
}
}
