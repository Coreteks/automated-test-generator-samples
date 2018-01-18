<?php

namespace tests\Faker\Provider\vi_VN;

use Faker\Provider\vi_VN\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\vi_VN\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\vi_VN\Internet();
}
}
