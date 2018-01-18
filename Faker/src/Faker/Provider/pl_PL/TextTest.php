<?php

namespace tests\Faker\Provider\pl_PL;

use Faker\Provider\pl_PL\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pl_PL\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\pl_PL\Text();
}
}
