<?php

namespace tests\Illuminate\Foundation\Testing;

use Illuminate\Foundation\Testing\TestResponse;
use Mockery as m;

class TestResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_response = null;
/**
* @var \Illuminate\Foundation\Testing\TestResponse
*/
protected $testResponse;

public function setUp()
{
    parent::setUp();

    $this->_response = null;
    $this->testResponse = new \Illuminate\Foundation\Testing\TestResponse($this->_response);
}

public function testFromBaseResponse0()
{
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->fromBaseResponse($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSuccessful0()
{
    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSuccessful();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertStatus0()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertStatus($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertRedirect0()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($uri)) == false (line 96)

    $actual = $this->testResponse->assertRedirect($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertRedirect1()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($uri)) == true (line 96)

    $actual = $this->testResponse->assertRedirect($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertHeader0()
{
    $headerName = m::mock('UntypedParameter_headerName_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == false (line 118)

    $actual = $this->testResponse->assertHeader($headerName, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertHeader1()
{
    $headerName = m::mock('UntypedParameter_headerName_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value)) == true (line 118)

    $actual = $this->testResponse->assertHeader($headerName, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertPlainCookie0()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertPlainCookie($cookieName, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertCookie0()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');
    $value = m::mock('UntypedParameter_value_');
    $encrypted = m::mock('UntypedParameter_encrypted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cookie || is_null($value)) == false (line 157)

    $actual = $this->testResponse->assertCookie($cookieName, $value, $encrypted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertCookie1()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');
    $value = m::mock('UntypedParameter_value_');
    $encrypted = m::mock('UntypedParameter_encrypted_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$cookie || is_null($value)) == true (line 157)

    $actual = $this->testResponse->assertCookie($cookieName, $value, $encrypted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertCookieExpired0()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertCookieExpired($cookieName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertCookieMissing0()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertCookieMissing($cookieName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSee0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSee($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSeeText0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSeeText($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertDontSee0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertDontSee($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertDontSeeText0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertDontSeeText($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJson0()
{
    $data = [];
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJson($data, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertExactJson0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertExactJson($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonFragment0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJsonFragment($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonFragment1()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJsonFragment($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissing0()
{
    $data = [];
    $exact = m::mock('UntypedParameter_exact_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exact) == false (line 367)

    $actual = $this->testResponse->assertJsonMissing($data, $exact);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissing1()
{
    $data = [];
    $exact = m::mock('UntypedParameter_exact_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exact) == false (line 367)

    $actual = $this->testResponse->assertJsonMissing($data, $exact);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissing2()
{
    $data = [];
    $exact = m::mock('UntypedParameter_exact_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($exact) == true (line 367)

    $actual = $this->testResponse->assertJsonMissing($data, $exact);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissingExact0()
{
    $data = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJsonMissingExact($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissingExact1()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\Illuminate\Support\Str::contains($actual, $unexpected)) == false (line 405)

    $actual = $this->testResponse->assertJsonMissingExact($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonMissingExact2()
{
    $data = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\Illuminate\Support\Str::contains($actual, $unexpected)) == true (line 405)

    $actual = $this->testResponse->assertJsonMissingExact($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure0()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == false (line 431)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure1()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == false (line 431)
    // if (is_array($value) && $key === '*') == false (line 436)
    // if (is_array($value)) == false (line 442)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure2()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == false (line 431)
    // if (is_array($value) && $key === '*') == false (line 436)
    // if (is_array($value)) == true (line 442)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure3()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == false (line 431)
    // if (is_array($value) && $key === '*') == true (line 436)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure4()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == false (line 431)
    // if (is_array($value) && $key === '*') == true (line 436)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure5()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == true (line 431)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure6()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == true (line 431)
    // if (is_array($value) && $key === '*') == false (line 436)
    // if (is_array($value)) == false (line 442)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure7()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == true (line 431)
    // if (is_array($value) && $key === '*') == false (line 436)
    // if (is_array($value)) == true (line 442)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure8()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == true (line 431)
    // if (is_array($value) && $key === '*') == true (line 436)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure9()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == false (line 427)
    // if (is_null($responseData)) == true (line 431)
    // if (is_array($value) && $key === '*') == true (line 436)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonStructure10()
{
    $structure = [];
    $responseData = m::mock('UntypedParameter_responseData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($structure)) == true (line 427)

    $actual = $this->testResponse->assertJsonStructure($structure, $responseData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonCount0()
{
    $count = m::mock('UntypedParameter_count_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key) == false (line 463)

    $actual = $this->testResponse->assertJsonCount($count, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonCount1()
{
    $count = m::mock('UntypedParameter_count_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key) == true (line 463)

    $actual = $this->testResponse->assertJsonCount($count, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonValidationErrors0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJsonValidationErrors($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertJsonValidationErrors1()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertJsonValidationErrors($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeResponseJson0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($decodedResponse) || $decodedResponse === false) == false (line 509)

    $actual = $this->testResponse->decodeResponseJson();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecodeResponseJson1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($decodedResponse) || $decodedResponse === false) == true (line 509)
    // if ($this->exception) == false (line 510)

    $actual = $this->testResponse->decodeResponseJson();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDecodeResponseJson2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($decodedResponse) || $decodedResponse === false) == true (line 509)
    // if ($this->exception) == true (line 510)
    // throw $this->exception -> exception (line 511)

    $actual = $this->testResponse->decodeResponseJson();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->testResponse->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewIs0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertViewIs($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHas0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 554)
    // if (is_null($value)) == false (line 560)
    // if ($value instanceof \Closure) == false (line 562)

    $actual = $this->testResponse->assertViewHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHas1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 554)
    // if (is_null($value)) == false (line 560)
    // if ($value instanceof \Closure) == true (line 562)

    $actual = $this->testResponse->assertViewHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHas2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 554)
    // if (is_null($value)) == true (line 560)

    $actual = $this->testResponse->assertViewHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHas3()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 554)

    $actual = $this->testResponse->assertViewHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHasAll0()
{
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertViewHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHasAll1()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == false (line 580)

    $actual = $this->testResponse->assertViewHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewHasAll2()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == true (line 580)

    $actual = $this->testResponse->assertViewHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertViewMissing0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertViewMissing($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHas0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 628)
    // if (is_null($value)) == false (line 632)

    $actual = $this->testResponse->assertSessionHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHas1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 628)
    // if (is_null($value)) == true (line 632)

    $actual = $this->testResponse->assertSessionHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHas2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 628)

    $actual = $this->testResponse->assertSessionHas($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasAll0()
{
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSessionHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasAll1()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == false (line 653)

    $actual = $this->testResponse->assertSessionHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasAll2()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == true (line 653)

    $actual = $this->testResponse->assertSessionHasAll($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasErrors0()
{
    $keys = m::mock('UntypedParameter_keys_');
    $format = m::mock('UntypedParameter_format_');
    $errorBag = m::mock('UntypedParameter_errorBag_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSessionHasErrors($keys, $format, $errorBag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasErrors1()
{
    $keys = m::mock('UntypedParameter_keys_');
    $format = m::mock('UntypedParameter_format_');
    $errorBag = m::mock('UntypedParameter_errorBag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == false (line 680)

    $actual = $this->testResponse->assertSessionHasErrors($keys, $format, $errorBag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasErrors2()
{
    $keys = m::mock('UntypedParameter_keys_');
    $format = m::mock('UntypedParameter_format_');
    $errorBag = m::mock('UntypedParameter_errorBag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_int($key)) == true (line 680)

    $actual = $this->testResponse->assertSessionHasErrors($keys, $format, $errorBag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionHasErrorsIn0()
{
    $errorBag = m::mock('UntypedParameter_errorBag_');
    $keys = m::mock('UntypedParameter_keys_');
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->assertSessionHasErrorsIn($errorBag, $keys, $format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionMissing0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == false (line 711)

    $actual = $this->testResponse->assertSessionMissing($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionMissing1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 711)

    $actual = $this->testResponse->assertSessionMissing($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssertSessionMissing2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($key)) == true (line 711)

    $actual = $this->testResponse->assertSessionMissing($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (json_last_error() === JSON_ERROR_NONE) == false (line 746)

    $actual = $this->testResponse->dump();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDump1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (json_last_error() === JSON_ERROR_NONE) == true (line 746)

    $actual = $this->testResponse->dump();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->testResponse->__isset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == false (line 784)

    $actual = $this->testResponse->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($method)) == true (line 784)

    $actual = $this->testResponse->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
