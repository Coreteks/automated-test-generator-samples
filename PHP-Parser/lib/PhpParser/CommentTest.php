<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\Comment;

class CommentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_text = null;
/**
* @var mixed
*/
protected $_startLine = null;
/**
* @var mixed
*/
protected $_startFilePos = null;
/**
* @var mixed
*/
protected $_startTokenPos = null;
/**
* @var \PhpParser\Comment
*/
protected $comment;

public function setUp()
{
    parent::setUp();

    $this->_text = null;
    $this->_startLine = null;
    $this->_startFilePos = null;
    $this->_startTokenPos = null;
    $this->comment = new \PhpParser\Comment($this->_text, $this->_startLine, $this->_startFilePos, $this->_startTokenPos);
}

public function testGetText0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->getText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->getLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilePos0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->getFilePos();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenPos0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->getTokenPos();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReformattedText0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $newlinePos) == false (line 87)
    // if (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\\R\\s+\\*.*)+$)', $text)) == false (line 90)
    // if (preg_match('(^/\\*\\*?\\s*[\\r\\n])', $text) && preg_match('(\\n(\\s*)\\*/$)', $text, $matches)) == false (line 100)
    // if (preg_match('(^/\\*\\*?\\s*(?!\\s))', $text, $matches)) == false (line 112)

    $actual = $this->comment->getReformattedText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReformattedText1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $newlinePos) == false (line 87)
    // if (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\\R\\s+\\*.*)+$)', $text)) == false (line 90)
    // if (preg_match('(^/\\*\\*?\\s*[\\r\\n])', $text) && preg_match('(\\n(\\s*)\\*/$)', $text, $matches)) == false (line 100)
    // if (preg_match('(^/\\*\\*?\\s*(?!\\s))', $text, $matches)) == true (line 112)

    $actual = $this->comment->getReformattedText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReformattedText2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $newlinePos) == false (line 87)
    // if (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\\R\\s+\\*.*)+$)', $text)) == false (line 90)
    // if (preg_match('(^/\\*\\*?\\s*[\\r\\n])', $text) && preg_match('(\\n(\\s*)\\*/$)', $text, $matches)) == true (line 100)

    $actual = $this->comment->getReformattedText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReformattedText3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $newlinePos) == false (line 87)
    // if (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\\R\\s+\\*.*)+$)', $text)) == true (line 90)

    $actual = $this->comment->getReformattedText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReformattedText4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $newlinePos) == true (line 87)

    $actual = $this->comment->getReformattedText();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    $actual = $this->comment->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
