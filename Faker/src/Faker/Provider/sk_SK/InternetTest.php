<?php

namespace tests\Faker\Provider\sk_SK;

use Faker\Provider\sk_SK\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sk_SK\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\sk_SK\Internet();
}
}
