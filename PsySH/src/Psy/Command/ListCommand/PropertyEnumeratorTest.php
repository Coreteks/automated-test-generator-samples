<?php

namespace tests\Psy\Command\ListCommand;

use Mockery as m;
use Psy\Command\ListCommand\PropertyEnumerator;

class PropertyEnumeratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand\PropertyEnumerator
*/
protected $propertyEnumerator;

public function setUp()
{
    parent::setUp();

    $this->propertyEnumerator = new \Psy\Command\ListCommand\PropertyEnumerator();
}
}
