<?php

namespace tests\Faker\Provider\ro_RO;

use Faker\Provider\ro_RO\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_RO\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ro_RO\Text();
}
}
