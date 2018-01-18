<?php

namespace tests\Faker\Provider\it_IT;

use Faker\Provider\it_IT\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_IT\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\it_IT\Text();
}
}
