<?php

namespace tests\Faker\Provider;

use Faker\Provider\Barcode;
use Mockery as m;

class BarcodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Barcode
*/
protected $barcode;

public function setUp()
{
    parent::setUp();

    $this->barcode = new \Faker\Provider\Barcode();
}

public function testEan130()
{
    // TODO: Your mock expectations here

    $actual = $this->barcode->ean13();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEan80()
{
    // TODO: Your mock expectations here

    $actual = $this->barcode->ean8();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsbn100()
{
    // TODO: Your mock expectations here

    $actual = $this->barcode->isbn10();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsbn130()
{
    // TODO: Your mock expectations here

    $actual = $this->barcode->isbn13();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
