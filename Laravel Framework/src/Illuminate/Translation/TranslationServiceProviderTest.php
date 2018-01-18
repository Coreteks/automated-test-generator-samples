<?php

namespace tests\Illuminate\Translation;

use Illuminate\Translation\TranslationServiceProvider;
use Mockery as m;

class TranslationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Translation\TranslationServiceProvider
*/
protected $translationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->translationServiceProvider = new \Illuminate\Translation\TranslationServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->translationServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
