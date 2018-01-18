<?php

namespace tests\Faker\Provider\en_US;

use Faker\Provider\en_US\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_US\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\en_US\Text();
}
}
