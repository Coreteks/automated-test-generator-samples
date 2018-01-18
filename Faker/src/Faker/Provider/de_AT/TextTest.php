<?php

namespace tests\Faker\Provider\de_AT;

use Faker\Provider\de_AT\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_AT\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\de_AT\Text();
}
}
