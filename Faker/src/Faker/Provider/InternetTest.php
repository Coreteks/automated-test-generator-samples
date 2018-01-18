<?php

namespace tests\Faker\Provider;

use Faker\Provider\Internet;
use Mockery as m;

class InternetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Internet
*/
protected $internet;

public function setUp()
{
    parent::setUp();

    $this->internet = new \Faker\Provider\Internet();
}

public function testEmail0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->email();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafeEmail0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->safeEmail();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFreeEmail0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->freeEmail();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompanyEmail0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->companyEmail();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFreeEmailDomain0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->freeEmailDomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafeEmailDomain0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->safeEmailDomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserName0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (trim($username, '._') === '') == false (line 99)

    $actual = $this->internet->userName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testUserName1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (trim($username, '._') === '') == true (line 99)
    // throw new \Exception('userName failed with the selected locale. Try a different locale or activate the "intl" PHP extension.') -> exception (line 100)

    $actual = $this->internet->userName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPassword0()
{
    $minLength = m::mock('UntypedParameter_minLength_');
    $maxLength = m::mock('UntypedParameter_maxLength_');

    // TODO: Your mock expectations here

    $actual = $this->internet->password($minLength, $maxLength);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomainName0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->domainName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomainWord0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (trim($lastName, '._') === '') == false (line 137)

    $actual = $this->internet->domainWord();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDomainWord1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (trim($lastName, '._') === '') == true (line 137)
    // throw new \Exception('domainWord failed with the selected locale. Try a different locale or activate the "intl" PHP extension.') -> exception (line 138)

    $actual = $this->internet->domainWord();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTld0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->tld();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->url();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlug0()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == false (line 170)
    // if ($variableNbWords) == false (line 173)

    $actual = $this->internet->slug($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlug1()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == false (line 170)
    // if ($variableNbWords) == true (line 173)

    $actual = $this->internet->slug($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlug2()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == true (line 170)

    $actual = $this->internet->slug($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIpv40()
{
    // TODO: Your mock expectations here

    $actual = $this->internet->ipv4();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIpv60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 195)

    $actual = $this->internet->ipv6();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIpv61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 195)
    // for (...) == false (line 195)

    $actual = $this->internet->ipv6();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalIpv40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::numberBetween(0, 1) === 0) == false (line 207)

    $actual = $this->internet->localIpv4();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocalIpv41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::numberBetween(0, 1) === 0) == true (line 207)

    $actual = $this->internet->localIpv4();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMacAddress0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 221)

    $actual = $this->internet->macAddress();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMacAddress1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 221)
    // for (...) == false (line 221)

    $actual = $this->internet->macAddress();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
