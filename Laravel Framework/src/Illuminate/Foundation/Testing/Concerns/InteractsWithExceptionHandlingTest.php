
Notice: Trying to get property 'parts' of non-object in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 114

Warning: array_slice() expects parameter 1 to be array, null given in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 114

Warning: array_unshift() expects parameter 1 to be array, null given in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 116
<?php

use ;
use Mockery as m;

class Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_originalHandler = null;
/**
* @var mixed
*/
protected $_except = null;
/**
* @var \
*/
protected $;

public function setUp()
{
    parent::setUp();

    $this->_originalHandler = null;
    $this->_except = null;
    $this-> = new \($this->_originalHandler, $this->_except);
}

public function testReport0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRender0()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) == false (line 106)
    // throw $e -> exception (line 118)

    $actual = $this->->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRender1()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) == false (line 106)
    // if ($e instanceof $class) == false (line 113)
    // throw $e -> exception (line 118)

    $actual = $this->->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) == false (line 106)
    // if ($e instanceof $class) == true (line 113)

    $actual = $this->->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
 */
public function testRender3()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) == true (line 106)
    // throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException("{$request->method()} {$request->url()}", null, $e->getCode()) -> exception (line 107)

    $actual = $this->->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderForConsole0()
{
    $output = m::mock('UntypedParameter_output_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->->renderForConsole($output, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
