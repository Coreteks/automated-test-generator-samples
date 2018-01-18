<?php

namespace tests\Faker\Provider\ro_MD;

use Faker\Provider\ro_MD\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ro_MD\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ro_MD\Text();
}
}
