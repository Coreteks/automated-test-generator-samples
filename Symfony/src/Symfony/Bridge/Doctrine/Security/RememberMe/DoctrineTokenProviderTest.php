<?php

namespace tests\Symfony\Bridge\Doctrine\Security\RememberMe;

use Doctrine\DBAL\Connection;
use Mockery as m;
use Symfony\Bridge\Doctrine\Security\RememberMe\DoctrineTokenProvider;

class DoctrineTokenProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_conn;
/**
* @var \Symfony\Bridge\Doctrine\Security\RememberMe\DoctrineTokenProvider
*/
protected $doctrineTokenProvider;

public function setUp()
{
    parent::setUp();

    $this->_conn = m::mock(\Doctrine\DBAL\Connection::class);
    $this->doctrineTokenProvider = new \Symfony\Bridge\Doctrine\Security\RememberMe\DoctrineTokenProvider($this->_conn);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
 */
public function testLoadTokenBySeries0()
{
    $series = m::mock('UntypedParameter_series_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($row) == false (line 59)
    // throw new \Symfony\Component\Security\Core\Exception\TokenNotFoundException('No token found.') -> exception (line 63)

    $actual = $this->doctrineTokenProvider->loadTokenBySeries($series);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadTokenBySeries1()
{
    $series = m::mock('UntypedParameter_series_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($row) == true (line 59)

    $actual = $this->doctrineTokenProvider->loadTokenBySeries($series);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeleteTokenBySeries0()
{
    $series = m::mock('UntypedParameter_series_');

    // TODO: Your mock expectations here

    $actual = $this->doctrineTokenProvider->deleteTokenBySeries($series);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdateToken0()
{
    $series = m::mock('UntypedParameter_series_');
    $tokenValue = m::mock('UntypedParameter_tokenValue_');
    $lastUsed = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($updated < 1) == false (line 95)

    $actual = $this->doctrineTokenProvider->updateToken($series, $tokenValue, $lastUsed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\TokenNotFoundException
 */
public function testUpdateToken1()
{
    $series = m::mock('UntypedParameter_series_');
    $tokenValue = m::mock('UntypedParameter_tokenValue_');
    $lastUsed = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($updated < 1) == true (line 95)
    // throw new \Symfony\Component\Security\Core\Exception\TokenNotFoundException('No token found.') -> exception (line 96)

    $actual = $this->doctrineTokenProvider->updateToken($series, $tokenValue, $lastUsed);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateNewToken0()
{
    $token = m::mock(\Symfony\Component\Security\Core\Authentication\RememberMe\PersistentTokenInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineTokenProvider->createNewToken($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
