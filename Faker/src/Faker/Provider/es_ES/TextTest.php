<?php

namespace tests\Faker\Provider\es_ES;

use Faker\Provider\es_ES\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_ES\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\es_ES\Text();
}
}
