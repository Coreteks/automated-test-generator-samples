<?php

namespace tests\Faker\Provider\it_IT;

use Faker\Provider\it_IT\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_IT\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\it_IT\Internet();
}
}
