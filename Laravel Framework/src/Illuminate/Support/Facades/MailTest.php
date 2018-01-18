<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Mail;
use Mockery as m;

class MailTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Mail
*/
protected $mail;

public function setUp()
{
    parent::setUp();

    $this->mail = new \Illuminate\Support\Facades\Mail();
}

public function testFake0()
{
    // TODO: Your mock expectations here

    $actual = $this->mail->fake();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
