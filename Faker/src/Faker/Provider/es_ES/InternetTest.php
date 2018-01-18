<?php

namespace tests\Faker\Provider\es_ES;

use Faker\Provider\es_ES\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_ES\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\es_ES\Internet();
}
}
