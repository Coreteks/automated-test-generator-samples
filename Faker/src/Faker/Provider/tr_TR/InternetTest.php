<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\tr_TR\Internet();
}
}
