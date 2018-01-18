<?php

namespace tests\Faker\Provider\es_VE;

use Faker\Provider\es_VE\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_VE\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\es_VE\Internet();
}
}
