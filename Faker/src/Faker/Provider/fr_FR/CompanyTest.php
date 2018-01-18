<?php

namespace tests\Faker\Provider\fr_FR;

use Faker\Provider\fr_FR\Company;
use Mockery as m;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fr_FR\Company
*/
protected $company;

public function setUp()
{
    parent::setUp();

    $this->company = new \Faker\Provider\fr_FR\Company();
}

public function testCatchPhraseNoun0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseNoun();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhraseAttribute0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseAttribute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhraseVerb0()
{
    // TODO: Your mock expectations here

    $actual = $this->company->catchPhraseVerb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhrase0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isCatchPhraseValid($catchPhrase)) == false (line 99)
    // PhpParser\Node\Stmt\Do_ == false (line 95)

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCatchPhrase1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isCatchPhraseValid($catchPhrase)) == true (line 99)

    $actual = $this->company->catchPhrase();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSiret0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatted) == false (line 119)

    $actual = $this->company->siret($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSiret1()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatted) == true (line 119)

    $actual = $this->company->siret($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSiren0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatted) == false (line 136)

    $actual = $this->company->siren($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSiren1()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatted) == true (line 136)

    $actual = $this->company->siren($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
