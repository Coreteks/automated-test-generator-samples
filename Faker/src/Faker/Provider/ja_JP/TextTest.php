<?php

namespace tests\Faker\Provider\ja_JP;

use Faker\Provider\ja_JP\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ja_JP\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ja_JP\Text();
}
}