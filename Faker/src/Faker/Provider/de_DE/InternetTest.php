<?php

namespace tests\Faker\Provider\de_DE;

use Faker\Provider\de_DE\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_DE\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\de_DE\Internet();
}
}
