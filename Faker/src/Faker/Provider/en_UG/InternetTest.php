<?php

namespace tests\Faker\Provider\en_UG;

use Faker\Provider\en_UG\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_UG\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\en_UG\Internet();
}
}
