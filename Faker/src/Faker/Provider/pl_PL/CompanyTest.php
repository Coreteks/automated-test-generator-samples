<?php

namespace tests\Faker\Provider\pl_PL;

use Faker\Provider\pl_PL\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pl_PL\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\pl_PL\Company();
}

public function testCompanyPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->companyPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 40)
    // for (...) == false (line 44)
    // if ($checksum == 10) == false (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 40)
    // for (...) == false (line 44)
    // if ($checksum == 10) == true (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 40)
    // for (...) == true (line 44)
    // for (...) == false (line 44)
    // if ($checksum == 10) == false (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 40)
    // for (...) == true (line 44)
    // for (...) == false (line 44)
    // if ($checksum == 10) == true (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 40)
    // for (...) == false (line 40)
    // for (...) == false (line 44)
    // if ($checksum == 10) == false (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 40)
    // for (...) == false (line 40)
    // for (...) == false (line 44)
    // if ($checksum == 10) == true (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 40)
    // for (...) == false (line 40)
    // for (...) == true (line 44)
    // for (...) == false (line 44)
    // if ($checksum == 10) == false (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegon7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 40)
    // for (...) == false (line 40)
    // for (...) == true (line 44)
    // for (...) == false (line 44)
    // if ($checksum == 10) == true (line 48)

    $actual = $this->company->regon();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 65)
    // for (...) == false (line 69)
    // if ($checksum == 10) == false (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 65)
    // for (...) == false (line 69)
    // if ($checksum == 10) == true (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 65)
    // for (...) == true (line 69)
    // for (...) == false (line 69)
    // if ($checksum == 10) == false (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 65)
    // for (...) == true (line 69)
    // for (...) == false (line 69)
    // if ($checksum == 10) == true (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 65)
    // for (...) == false (line 65)
    // for (...) == false (line 69)
    // if ($checksum == 10) == false (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 65)
    // for (...) == false (line 65)
    // for (...) == false (line 69)
    // if ($checksum == 10) == true (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 65)
    // for (...) == false (line 65)
    // for (...) == true (line 69)
    // for (...) == false (line 69)
    // if ($checksum == 10) == false (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegonLocal7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 65)
    // for (...) == false (line 65)
    // for (...) == true (line 69)
    // for (...) == false (line 69)
    // if ($checksum == 10) == true (line 73)

    $actual = $this->company->regonLocal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
