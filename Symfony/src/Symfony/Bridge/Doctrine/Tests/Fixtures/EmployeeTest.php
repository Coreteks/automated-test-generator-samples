<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Employee;

class EmployeeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\Employee
*/
protected $employee;

public function setUp()
{
    parent::setUp();

    $this->employee = new \Symfony\Bridge\Doctrine\Tests\Fixtures\Employee();
}
}
