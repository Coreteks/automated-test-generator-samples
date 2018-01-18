<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\kk_KZ\Internet();
}
}
