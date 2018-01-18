<?php

namespace tests\Faker\Provider\el_CY;

use Faker\Provider\el_CY\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\el_CY\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\el_CY\Internet();
}
}
