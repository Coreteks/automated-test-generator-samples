<?php

namespace tests\Faker\Provider\nl_NL;

use Faker\Provider\nl_NL\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_NL\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\nl_NL\Text();
}
}
