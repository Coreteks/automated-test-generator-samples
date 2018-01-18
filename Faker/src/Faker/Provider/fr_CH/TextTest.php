<?php

namespace tests\Faker\Provider\fr_CH;

use Faker\Provider\fr_CH\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_CH\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\fr_CH\Text();
}
}
