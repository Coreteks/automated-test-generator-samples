<?php

namespace tests\Illuminate\Mail;

use Illuminate\Mail\MailServiceProvider;
use Mockery as m;

class MailServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Mail\MailServiceProvider
*/
protected $mailServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->mailServiceProvider = new \Illuminate\Mail\MailServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterSwiftMailer0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailServiceProvider->registerSwiftMailer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
