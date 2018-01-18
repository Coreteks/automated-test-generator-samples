<?php

namespace tests\Faker\Provider\zh_CN;

use Faker\Provider\zh_CN\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_CN\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\zh_CN\Internet();
}
}
