<?php

namespace tests\Symfony\Bridge\ProxyManager\LazyProxy\Instantiator;

use Mockery as m;
use Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV1;

class LazyLoadingValueHolderFactoryV1Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV1
*/
protected $lazyLoadingValueHolderFactoryV1;

public function setUp()
{
    parent::setUp();

    $this->lazyLoadingValueHolderFactoryV1 = new \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\LazyLoadingValueHolderFactoryV1();
}
}
