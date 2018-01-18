<?php

namespace tests\Faker\Provider\fi_FI;

use Faker\Provider\fi_FI\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fi_FI\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\fi_FI\Internet();
}
}
