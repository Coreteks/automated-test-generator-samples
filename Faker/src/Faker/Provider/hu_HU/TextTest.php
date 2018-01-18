<?php

namespace tests\Faker\Provider\hu_HU;

use Faker\Provider\hu_HU\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hu_HU\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\hu_HU\Text();
}
}
