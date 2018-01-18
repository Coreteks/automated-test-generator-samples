<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\uk_UA\Internet();
}
}
