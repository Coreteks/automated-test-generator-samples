<?php

namespace tests\Symfony\Bridge\Doctrine\Form\EventListener;

use Mockery as m;
use Symfony\Bridge\Doctrine\Form\EventListener\MergeDoctrineCollectionListener;

class MergeDoctrineCollectionListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Form\EventListener\MergeDoctrineCollectionListener
*/
protected $mergeDoctrineCollectionListener;

public function setUp()
{
    parent::setUp();

    $this->mergeDoctrineCollectionListener = new \Symfony\Bridge\Doctrine\Form\EventListener\MergeDoctrineCollectionListener();
}

public function testGetSubscribedEvents0()
{
    // TODO: Your mock expectations here

    $actual = $this->mergeDoctrineCollectionListener->getSubscribedEvents();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnSubmit0()
{
    $event = m::mock(\Symfony\Component\Form\FormEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($collection instanceof \Doctrine\Common\Collections\Collection && 0 === count($data)) == false (line 48)

    $actual = $this->mergeDoctrineCollectionListener->onSubmit($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnSubmit1()
{
    $event = m::mock(\Symfony\Component\Form\FormEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($collection instanceof \Doctrine\Common\Collections\Collection && 0 === count($data)) == true (line 48)

    $actual = $this->mergeDoctrineCollectionListener->onSubmit($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
