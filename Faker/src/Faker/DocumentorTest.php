<?php

namespace tests\Faker;

use Faker\Documentor;
use Faker\Generator;
use Mockery as m;

class DocumentorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\Documentor
*/
protected $documentor;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->documentor = new \Faker\Documentor($this->_generator);
}

public function testGetFormatters0()
{
    // TODO: Your mock expectations here

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters1()
{
    // TODO: Your mock expectations here

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetFormatters2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetFormatters11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == false (line 40)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetFormatters20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == false (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == false (line 53)
    // if ($example instanceof \Faker\Generator || $example instanceof \Faker\UniqueGenerator) == true (line 55)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == false (line 51)
    // if ($example instanceof \DateTime) == true (line 53)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == false (line 34)
    // if ($reflparameter->isDefaultValueAvailable()) == true (line 40)
    // if (is_array($example)) == true (line 51)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == false (line 30)
    // if ($reflmethod->isConstructor()) == true (line 34)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatters30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($reflmethod->getDeclaringClass()->getName() == 'Faker\\Provider\\Base' && $providerClass != 'Faker\\Provider\\Base') == true (line 30)

    $actual = $this->documentor->getFormatters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
