<?php

namespace tests\Faker\Provider\ne_NP;

use Faker\Provider\ne_NP\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ne_NP\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\ne_NP\Internet();
}
}
