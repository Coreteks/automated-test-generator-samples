<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\SecurityExtension;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SecurityExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_securityChecker;
/**
* @var \Symfony\Bridge\Twig\Extension\SecurityExtension
*/
protected $securityExtension;

public function setUp()
{
    parent::setUp();

    $this->_securityChecker = m::mock(\Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface::class);
    $this->securityExtension = new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->_securityChecker);
}

/**
 * @expectedException \Exception
 */
public function testIsGranted0()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == false (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsGranted1()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == false (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsGranted2()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == false (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testIsGranted3()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == true (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsGranted4()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == true (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsGranted5()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == false (line 36)
    // if (null !== $field) == true (line 40)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsGranted6()
{
    $role = m::mock('UntypedParameter_role_');
    $object = m::mock('UntypedParameter_object_');
    $field = m::mock('UntypedParameter_field_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->securityChecker) == true (line 36)

    $actual = $this->securityExtension->isGranted($role, $object, $field);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->securityExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->securityExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
