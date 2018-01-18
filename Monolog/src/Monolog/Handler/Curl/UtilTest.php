<?php

namespace tests\Monolog\Handler\Curl;

use Mockery as m;
use Monolog\Handler\Curl\Util;

class UtilTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\Curl\Util
*/
protected $util;

public function setUp()
{
    parent::setUp();

    $this->util = new \Monolog\Handler\Curl\Util();
}

public function testExecute0()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == false (line 34)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == true (line 34)
    // if (curl_exec($ch) === false) == false (line 35)
    // if ($closeAfterDone) == false (line 51)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == true (line 34)
    // if (curl_exec($ch) === false) == false (line 35)
    // if ($closeAfterDone) == true (line 51)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == true (line 34)
    // if (curl_exec($ch) === false) == true (line 35)
    // if (false === in_array($curlErrno, self::$retriableErrorCodes, true) || !$retries) == false (line 38)
    // while ($retries--) == false (line 34)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute4()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == true (line 34)
    // if (curl_exec($ch) === false) == true (line 35)
    // if (false === in_array($curlErrno, self::$retriableErrorCodes, true) || !$retries) == true (line 38)
    // if ($closeAfterDone) == false (line 41)
    // throw new \RuntimeException(sprintf('Curl error (code %s): %s', $curlErrno, $curlError)) -> exception (line 45)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExecute5()
{
    $ch = m::mock('UntypedParameter_ch_');
    $retries = m::mock('UntypedParameter_retries_');
    $closeAfterDone = m::mock('UntypedParameter_closeAfterDone_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($retries--) == true (line 34)
    // if (curl_exec($ch) === false) == true (line 35)
    // if (false === in_array($curlErrno, self::$retriableErrorCodes, true) || !$retries) == true (line 38)
    // if ($closeAfterDone) == true (line 41)
    // throw new \RuntimeException(sprintf('Curl error (code %s): %s', $curlErrno, $curlError)) -> exception (line 45)

    $actual = $this->util->execute($ch, $retries, $closeAfterDone);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
