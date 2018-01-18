<?php

namespace tests\Faker\Provider\sl_SI;

use Faker\Provider\sl_SI\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sl_SI\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\sl_SI\Internet();
}
}
