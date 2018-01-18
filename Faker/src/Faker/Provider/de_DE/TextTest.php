<?php

namespace tests\Faker\Provider\de_DE;

use Faker\Provider\de_DE\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\de_DE\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\de_DE\Text();
}
}
