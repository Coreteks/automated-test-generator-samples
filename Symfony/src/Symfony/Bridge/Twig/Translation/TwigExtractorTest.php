<?php

namespace tests\Symfony\Bridge\Twig\Translation;

use Mockery as m;
use Symfony\Bridge\Twig\Translation\TwigExtractor;
use Twig\Environment;

class TwigExtractorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_twig;
/**
* @var \Symfony\Bridge\Twig\Translation\TwigExtractor
*/
protected $twigExtractor;

public function setUp()
{
    parent::setUp();

    $this->_twig = m::mock(\Twig\Environment::class);
    $this->twigExtractor = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->_twig);
}

public function testExtract0()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExtract1()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExtract2()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file instanceof \SplFileInfo) == false (line 62)
    // throw $e -> exception (line 72)

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExtract3()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file instanceof \SplFileInfo) == true (line 62)
    // if (method_exists($e, 'setSourceContext')) == false (line 65)
    // throw $e -> exception (line 72)

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExtract4()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file instanceof \SplFileInfo) == true (line 62)
    // if (method_exists($e, 'setSourceContext')) == true (line 65)
    // throw $e -> exception (line 72)

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtract5()
{
    $resource = m::mock('UntypedParameter_resource_');
    $catalogue = m::mock(\Symfony\Component\Translation\MessageCatalogue::class);

    // TODO: Your mock expectations here

    $actual = $this->twigExtractor->extract($resource, $catalogue);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPrefix0()
{
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->twigExtractor->setPrefix($prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
