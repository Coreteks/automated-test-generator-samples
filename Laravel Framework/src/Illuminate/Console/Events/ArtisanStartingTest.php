<?php

namespace tests\Illuminate\Console\Events;

use Illuminate\Console\Events\ArtisanStarting;
use Mockery as m;

class ArtisanStartingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_artisan = null;
/**
* @var \Illuminate\Console\Events\ArtisanStarting
*/
protected $artisanStarting;

public function setUp()
{
    parent::setUp();

    $this->_artisan = null;
    $this->artisanStarting = new \Illuminate\Console\Events\ArtisanStarting($this->_artisan);
}
}
