<?php

namespace tests\Faker\Provider;

use Faker\Provider\Lorem;
use Mockery as m;

class LoremTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\Lorem
*/
protected $lorem;

public function setUp()
{
    parent::setUp();

    $this->lorem = new \Faker\Provider\Lorem();
}

public function testWord0()
{
    // TODO: Your mock expectations here

    $actual = $this->lorem->word();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWords0()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 67)

    $actual = $this->lorem->words($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWords1()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 67)
    // for (...) == false (line 67)

    $actual = $this->lorem->words($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSentence0()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == false (line 85)
    // if ($variableNbWords) == false (line 88)

    $actual = $this->lorem->sentence($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSentence1()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == false (line 85)
    // if ($variableNbWords) == true (line 88)

    $actual = $this->lorem->sentence($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSentence2()
{
    $nbWords = m::mock('UntypedParameter_nbWords_');
    $variableNbWords = m::mock('UntypedParameter_variableNbWords_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbWords <= 0) == true (line 85)

    $actual = $this->lorem->sentence($nbWords, $variableNbWords);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSentences0()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 109)

    $actual = $this->lorem->sentences($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSentences1()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 109)
    // for (...) == false (line 109)

    $actual = $this->lorem->sentences($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParagraph0()
{
    $nbSentences = m::mock('UntypedParameter_nbSentences_');
    $variableNbSentences = m::mock('UntypedParameter_variableNbSentences_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbSentences <= 0) == false (line 127)
    // if ($variableNbSentences) == false (line 130)

    $actual = $this->lorem->paragraph($nbSentences, $variableNbSentences);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParagraph1()
{
    $nbSentences = m::mock('UntypedParameter_nbSentences_');
    $variableNbSentences = m::mock('UntypedParameter_variableNbSentences_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbSentences <= 0) == false (line 127)
    // if ($variableNbSentences) == true (line 130)

    $actual = $this->lorem->paragraph($nbSentences, $variableNbSentences);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParagraph2()
{
    $nbSentences = m::mock('UntypedParameter_nbSentences_');
    $variableNbSentences = m::mock('UntypedParameter_variableNbSentences_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($nbSentences <= 0) == true (line 127)

    $actual = $this->lorem->paragraph($nbSentences, $variableNbSentences);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParagraphs0()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 148)

    $actual = $this->lorem->paragraphs($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParagraphs1()
{
    $nb = m::mock('UntypedParameter_nb_');
    $asText = m::mock('UntypedParameter_asText_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 148)
    // for (...) == false (line 148)

    $actual = $this->lorem->paragraphs($nb, $asText);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText0()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == false (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText1()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == true (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText2()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == true (line 174)
    // while ($size < $maxNbChars) == false (line 178)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == false (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText3()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == true (line 174)
    // while ($size < $maxNbChars) == false (line 178)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == true (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText4()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == true (line 174)
    // while ($size < $maxNbChars) == true (line 178)
    // while ($size < $maxNbChars) == false (line 178)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == false (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText5()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == false (line 167)
    // while (empty($text)) == true (line 174)
    // while ($size < $maxNbChars) == true (line 178)
    // while ($size < $maxNbChars) == false (line 178)
    // while (empty($text)) == false (line 174)
    // if ($type === 'word') == true (line 188)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testText6()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 5) == true (line 167)
    // throw new \InvalidArgumentException('text() can only generate text of at least 5 characters') -> exception (line 168)

    $actual = $this->lorem->text($maxNbChars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
