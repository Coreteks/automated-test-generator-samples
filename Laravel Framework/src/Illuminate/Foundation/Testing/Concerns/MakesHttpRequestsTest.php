
Notice: Trying to get property 'parts' of non-object in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 114

Warning: array_slice() expects parameter 1 to be array, null given in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 114

Warning: array_unshift() expects parameter 1 to be array, null given in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 116
<?php

use ;
use Mockery as m;

class Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \
*/
protected $;

public function setUp()
{
    parent::setUp();

    $this-> = new \();
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock('UntypedParameter_next_');

    // TODO: Your mock expectations here

    $actual = $this->->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
