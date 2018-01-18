<?php

namespace tests\Faker\Provider\it_CH;

use Faker\Provider\it_CH\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_CH\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\it_CH\Text();
}
}
