<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SessionController;

class SessionControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SessionController
*/
protected $sessionController;

public function setUp()
{
    parent::setUp();

    $this->sessionController = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\SessionController();
}

public function testWelcomeAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$session->has('name')) == false (line 29)

    $actual = $this->sessionController->welcomeAction($request, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWelcomeAction1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$session->has('name')) == true (line 29)
    // if (!$name) == false (line 30)

    $actual = $this->sessionController->welcomeAction($request, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWelcomeAction2()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$session->has('name')) == true (line 29)
    // if (!$name) == true (line 30)

    $actual = $this->sessionController->welcomeAction($request, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogoutAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->sessionController->logoutAction($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFlashAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->sessionController->setFlashAction($request, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShowFlashAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session->getFlashBag()->has('notice')) == false (line 65)

    $actual = $this->sessionController->showFlashAction($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShowFlashAction1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session->getFlashBag()->has('notice')) == true (line 65)

    $actual = $this->sessionController->showFlashAction($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
