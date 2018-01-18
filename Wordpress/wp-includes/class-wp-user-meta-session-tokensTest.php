<?php

namespace tests;

use Mockery as m;
use WP_User_Meta_Session_Tokens;

class WP_User_Meta_Session_TokensTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_User_Meta_Session_Tokens
*/
protected $wP_User_Meta_Session_Tokens;

public function setUp()
{
    parent::setUp();

    $this->wP_User_Meta_Session_Tokens = new \WP_User_Meta_Session_Tokens();
}

public function testDrop_sessions0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_User_Meta_Session_Tokens->drop_sessions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
