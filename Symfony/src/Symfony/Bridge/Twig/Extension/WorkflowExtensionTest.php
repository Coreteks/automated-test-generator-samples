<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\WorkflowExtension;
use Symfony\Component\Workflow\Registry;

class WorkflowExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_workflowRegistry;
/**
* @var \Symfony\Bridge\Twig\Extension\WorkflowExtension
*/
protected $workflowExtension;

public function setUp()
{
    parent::setUp();

    $this->_workflowRegistry = m::mock(\Symfony\Component\Workflow\Registry::class);
    $this->workflowExtension = new \Symfony\Bridge\Twig\Extension\WorkflowExtension($this->_workflowRegistry);
}

public function testGetFunctions0()
{
    // TODO: Your mock expectations here

    $actual = $this->workflowExtension->getFunctions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCanTransition0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $transitionName = m::mock('UntypedParameter_transitionName_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->workflowExtension->canTransition($subject, $transitionName, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEnabledTransitions0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->workflowExtension->getEnabledTransitions($subject, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMarkedPlace0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $placeName = m::mock('UntypedParameter_placeName_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->workflowExtension->hasMarkedPlace($subject, $placeName, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMarkedPlaces0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $placesNameOnly = m::mock('UntypedParameter_placesNameOnly_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($placesNameOnly) == false (line 97)

    $actual = $this->workflowExtension->getMarkedPlaces($subject, $placesNameOnly, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMarkedPlaces1()
{
    $subject = m::mock('UntypedParameter_subject_');
    $placesNameOnly = m::mock('UntypedParameter_placesNameOnly_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($placesNameOnly) == true (line 97)

    $actual = $this->workflowExtension->getMarkedPlaces($subject, $placesNameOnly, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->workflowExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
