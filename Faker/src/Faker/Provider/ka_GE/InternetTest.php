<?php

namespace tests\Faker\Provider\ka_GE;

use Faker\Provider\ka_GE\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ka_GE\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\ka_GE\Internet();
}
}
