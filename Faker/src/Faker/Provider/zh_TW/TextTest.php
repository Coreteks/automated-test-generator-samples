<?php

namespace tests\Faker\Provider\zh_TW;

use Faker\Provider\zh_TW\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\zh_TW\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\zh_TW\Text();
}
}
