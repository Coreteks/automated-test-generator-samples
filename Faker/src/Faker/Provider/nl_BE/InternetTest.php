<?php

namespace tests\Faker\Provider\nl_BE;

use Faker\Provider\nl_BE\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_BE\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\nl_BE\Internet();
}
}
