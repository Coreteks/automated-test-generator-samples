<?php

namespace tests\Faker\Provider\en_NG;

use Faker\Provider\en_NG\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_NG\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\en_NG\Internet();
}
}
