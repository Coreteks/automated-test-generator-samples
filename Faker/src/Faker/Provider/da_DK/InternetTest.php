<?php

namespace tests\Faker\Provider\da_DK;

use Faker\Provider\da_DK\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\da_DK\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\da_DK\Internet();
}
}
