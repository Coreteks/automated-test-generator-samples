<?php

namespace tests\Symfony\Bridge\Twig\Tests\Extension\Fixtures;

use Mockery as m;
use Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubTranslator;

class StubTranslatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubTranslator
*/
protected $stubTranslator;

public function setUp()
{
    parent::setUp();

    $this->stubTranslator = new \Symfony\Bridge\Twig\Tests\Extension\Fixtures\StubTranslator();
}

public function testTrans0()
{
    $id = m::mock('UntypedParameter_id_');
    $parameters = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->stubTranslator->trans($id, $parameters, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransChoice0()
{
    $id = m::mock('UntypedParameter_id_');
    $number = m::mock('UntypedParameter_number_');
    $parameters = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->stubTranslator->transChoice($id, $number, $parameters, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->stubTranslator->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->stubTranslator->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
