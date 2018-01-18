<?php

namespace tests\Faker\Guesser;

use Faker\Generator;
use Faker\Guesser\Name;
use Mockery as m;

class NameTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Faker\Guesser\Name
*/
protected $name;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->name = new \Faker\Guesser\Name($this->_generator);
}

public function testGuessFormat0()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == false (line 137)
    // Case 'body' == false (line 147)
    // Case 'summary' == false (line 148)
    // Case 'article' == false (line 149)
    // Case 'description' == false (line 150)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat1()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == false (line 137)
    // Case 'body' == false (line 147)
    // Case 'summary' == false (line 148)
    // Case 'article' == false (line 149)
    // Case 'description' == true (line 150)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat2()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == false (line 137)
    // Case 'body' == false (line 147)
    // Case 'summary' == false (line 148)
    // Case 'article' == true (line 149)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat3()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == false (line 137)
    // Case 'body' == false (line 147)
    // Case 'summary' == true (line 148)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat4()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == false (line 137)
    // Case 'body' == true (line 147)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat5()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == true (line 137)
    // if ($size !== null && $size <= 10) == false (line 138)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat6()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == false (line 133)
    // Case 'title' == true (line 137)
    // if ($size !== null && $size <= 10) == true (line 138)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat7()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == false (line 132)
    // Case 'employer' == true (line 133)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat8()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == false (line 131)
    // Case 'companyname' == true (line 132)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat9()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == false (line 127)
    // Case 'company' == true (line 131)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat10()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == false (line 126)
    // Case 'website' == true (line 127)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat11()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == false (line 122)
    // Case 'url' == true (line 126)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat12()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == false (line 121)
    // Case 'currencycode' == true (line 122)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat13()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == false (line 117)
    // Case 'currency' == true (line 121)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat14()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == false (line 96)
    // Case 'locale' == true (line 117)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat15()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == true (line 96)
    // switch ($size) (line 97)
    // Case 2 == false (line 98)
    // Case 3 == false (line 102)
    // Case 5 == false (line 106)
    // Case 6 == false (line 107)
    // Default (line 111)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat16()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == true (line 96)
    // switch ($size) (line 97)
    // Case 2 == false (line 98)
    // Case 3 == false (line 102)
    // Case 5 == false (line 106)
    // Case 6 == true (line 107)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat17()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == true (line 96)
    // switch ($size) (line 97)
    // Case 2 == false (line 98)
    // Case 3 == false (line 102)
    // Case 5 == true (line 106)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat18()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == true (line 96)
    // switch ($size) (line 97)
    // Case 2 == false (line 98)
    // Case 3 == true (line 102)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat19()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == false (line 86)
    // Case 'country' == true (line 96)
    // switch ($size) (line 97)
    // Case 2 == true (line 98)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat20()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == true (line 86)
    // if ($this->generator->locale == 'en_US') == false (line 87)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat21()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == false (line 82)
    // Case 'county' == true (line 86)
    // if ($this->generator->locale == 'en_US') == true (line 87)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat22()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == false (line 78)
    // Case 'state' == true (line 82)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat23()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == false (line 77)
    // Case 'zipcode' == true (line 78)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat24()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == false (line 73)
    // Case 'postcode' == true (line 77)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat25()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == false (line 69)
    // Case 'streetaddress' == true (line 73)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat26()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == false (line 68)
    // Case 'town' == true (line 69)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat27()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == false (line 64)
    // Case 'city' == true (line 68)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat28()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == false (line 60)
    // Case 'address' == true (line 64)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat29()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == false (line 59)
    // Case 'telnumber' == true (line 60)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat30()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == false (line 58)
    // Case 'telephone' == true (line 59)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat31()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == false (line 57)
    // Case 'phone' == true (line 58)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat32()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == false (line 53)
    // Case 'phonenumber' == true (line 57)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat33()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == false (line 52)
    // Case 'emailaddress' == true (line 53)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat34()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == false (line 48)
    // Case 'email' == true (line 52)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat35()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == false (line 47)
    // Case 'login' == true (line 48)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat36()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == false (line 43)
    // Case 'username' == true (line 47)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat37()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == false (line 39)
    // Case 'lastname' == true (line 43)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat38()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == false (line 33)
    // switch (str_replace('_', '', $name)) (line 38)
    // Case 'firstname' == true (line 39)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat39()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == false (line 28)
    // if (preg_match('/(_a|A)t$/', $name)) == true (line 33)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGuessFormat40()
{
    $name = m::mock('UntypedParameter_name_');
    $size = m::mock('UntypedParameter_size_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/^is[_A-Z]/', $name)) == true (line 28)

    $actual = $this->name->guessFormat($name, $size);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
