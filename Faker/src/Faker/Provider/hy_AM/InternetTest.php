<?php

namespace tests\Faker\Provider\hy_AM;

use Faker\Provider\hy_AM\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hy_AM\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\hy_AM\Internet();
}
}
