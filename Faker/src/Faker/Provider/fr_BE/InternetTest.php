<?php

namespace tests\Faker\Provider\fr_BE;

use Faker\Provider\fr_BE\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_BE\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\fr_BE\Internet();
}
}
