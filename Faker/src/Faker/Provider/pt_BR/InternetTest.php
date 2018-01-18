<?php

namespace tests\Faker\Provider\pt_BR;

use Faker\Provider\pt_BR\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_BR\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\pt_BR\Internet();
}
}
