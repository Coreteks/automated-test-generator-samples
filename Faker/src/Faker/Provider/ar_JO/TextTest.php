<?php

namespace tests\Faker\Provider\ar_JO;

use Faker\Provider\ar_JO\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_JO\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ar_JO\Text();
}
}
