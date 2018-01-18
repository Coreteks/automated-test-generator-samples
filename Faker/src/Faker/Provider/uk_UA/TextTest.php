<?php

namespace tests\Faker\Provider\uk_UA;

use Faker\Provider\uk_UA\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\uk_UA\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\uk_UA\Text();
}
}
