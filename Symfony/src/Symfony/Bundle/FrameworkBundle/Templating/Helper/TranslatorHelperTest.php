<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper;
use Symfony\Component\Translation\TranslatorInterface;

class TranslatorHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_translator;
/**
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper
*/
protected $translatorHelper;

public function setUp()
{
    parent::setUp();

    $this->_translator = m::mock(\Symfony\Component\Translation\TranslatorInterface::class);
    $this->translatorHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->_translator);
}

public function testTrans0()
{
    $id = m::mock('UntypedParameter_id_');
    $parameters = [];
    $domain = m::mock('UntypedParameter_domain_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->translatorHelper->trans($id, $parameters, $domain, $locale);
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

    $actual = $this->translatorHelper->transChoice($id, $number, $parameters, $domain, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->translatorHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
