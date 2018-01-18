<?php

namespace tests\Faker\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\kk_KZ\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\kk_KZ\Text();
}
}
