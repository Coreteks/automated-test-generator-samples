<?php

namespace tests\Faker\Provider\ar_SA;

use Faker\Provider\ar_SA\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_SA\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\ar_SA\Text();
}
}
