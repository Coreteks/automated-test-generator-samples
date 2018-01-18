<?php

namespace tests\Faker\Provider\id_ID;

use Faker\Provider\id_ID\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\id_ID\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\id_ID\Internet();
}
}
