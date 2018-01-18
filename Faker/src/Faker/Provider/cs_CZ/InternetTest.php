<?php

namespace tests\Faker\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\cs_CZ\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\cs_CZ\Internet();
}
}
