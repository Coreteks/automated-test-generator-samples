<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\fr_FR\Text();
}
}
