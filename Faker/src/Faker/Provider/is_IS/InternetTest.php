<?php

namespace tests\Faker\Provider\is_IS;

use Faker\Provider\is_IS\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\is_IS\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\is_IS\Internet();
}
}
