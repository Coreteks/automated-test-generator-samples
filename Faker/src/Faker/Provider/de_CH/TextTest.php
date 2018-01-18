<?php

namespace tests\Faker\Provider\de_CH;

use Faker\Provider\de_CH\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_CH\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\de_CH\Text();
}
}
