<?php

namespace tests\Symfony\Bundle\SecurityBundle\Security;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\Security\FirewallConfig;

class FirewallConfigTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_userChecker = null;
/**
* @var mixed
*/
protected $_requestMatcher = null;
/**
* @var mixed
*/
protected $_securityEnabled = null;
/**
* @var mixed
*/
protected $_stateless = null;
/**
* @var mixed
*/
protected $_provider = null;
/**
* @var mixed
*/
protected $_context = null;
/**
* @var mixed
*/
protected $_entryPoint = null;
/**
* @var mixed
*/
protected $_accessDeniedHandler = null;
/**
* @var mixed
*/
protected $_accessDeniedUrl = null;
/**
* @var array
*/
protected $_listeners = [];
/**
* @var mixed
*/
protected $_switchUser = null;
/**
* @var \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
*/
protected $firewallConfig;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_userChecker = null;
    $this->_requestMatcher = null;
    $this->_securityEnabled = null;
    $this->_stateless = null;
    $this->_provider = null;
    $this->_context = null;
    $this->_entryPoint = null;
    $this->_accessDeniedHandler = null;
    $this->_accessDeniedUrl = null;
    $this->_listeners = [];
    $this->_switchUser = null;
    $this->firewallConfig = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig($this->_name, $this->_userChecker, $this->_requestMatcher, $this->_securityEnabled, $this->_stateless, $this->_provider, $this->_context, $this->_entryPoint, $this->_accessDeniedHandler, $this->_accessDeniedUrl, $this->_listeners, $this->_switchUser);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequestMatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getRequestMatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSecurityEnabled0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->isSecurityEnabled();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllowsAnonymous0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->allowsAnonymous();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStateless0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->isStateless();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetProvider0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getProvider();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetContext0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getContext();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntryPoint0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getEntryPoint();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUserChecker0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getUserChecker();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAccessDeniedHandler0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getAccessDeniedHandler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAccessDeniedUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getAccessDeniedUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetListeners0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getListeners();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSwitchUser0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallConfig->getSwitchUser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
