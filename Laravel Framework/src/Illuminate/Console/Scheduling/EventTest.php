<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Console\Scheduling\Mutex;
use Mockery as m;

class EventTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mutex;
/**
* @var mixed
*/
protected $_command = null;
/**
* @var \Illuminate\Console\Scheduling\Event
*/
protected $event;

public function setUp()
{
    parent::setUp();

    $this->_mutex = m::mock(\Illuminate\Console\Scheduling\Mutex::class);
    $this->_command = null;
    $this->event = new \Illuminate\Console\Scheduling\Event($this->_mutex, $this->_command);
}

public function testGetDefaultOutput0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->getDefaultOutput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->withoutOverlapping && !$this->mutex->create($this)) == false (line 169)

    $actual = $this->event->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->withoutOverlapping && !$this->mutex->create($this)) == true (line 169)

    $actual = $this->event->run($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMutexName0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->mutexName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallBeforeCallbacks0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->event->callBeforeCallbacks($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallBeforeCallbacks1()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->event->callBeforeCallbacks($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallAfterCallbacks0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->event->callAfterCallbacks($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallAfterCallbacks1()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->event->callAfterCallbacks($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildCommand0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->buildCommand();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDue0()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->runsInMaintenanceMode() && $app->isDownForMaintenance()) == false (line 265)

    $actual = $this->event->isDue($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDue1()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->runsInMaintenanceMode() && $app->isDownForMaintenance()) == true (line 265)

    $actual = $this->event->isDue($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunsInMaintenanceMode0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->runsInMaintenanceMode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunsInEnvironment0()
{
    $environment = m::mock('UntypedParameter_environment_');

    // TODO: Your mock expectations here

    $actual = $this->event->runsInEnvironment($environment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass0()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass1()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->call($callback)) == false (line 325)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass2()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->call($callback)) == true (line 325)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass3()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->call($callback)) == false (line 319)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass4()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->call($callback)) == false (line 319)
    // if ($app->call($callback)) == false (line 325)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass5()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->call($callback)) == false (line 319)
    // if ($app->call($callback)) == true (line 325)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFiltersPass6()
{
    $app = m::mock('UntypedParameter_app_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$app->call($callback)) == true (line 319)

    $actual = $this->event->filtersPass($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendOutputTo0()
{
    $location = m::mock('UntypedParameter_location_');
    $append = m::mock('UntypedParameter_append_');

    // TODO: Your mock expectations here

    $actual = $this->event->sendOutputTo($location, $append);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppendOutputTo0()
{
    $location = m::mock('UntypedParameter_location_');

    // TODO: Your mock expectations here

    $actual = $this->event->appendOutputTo($location);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmailOutputTo0()
{
    $addresses = m::mock('UntypedParameter_addresses_');
    $onlyIfOutputExists = m::mock('UntypedParameter_onlyIfOutputExists_');

    // TODO: Your mock expectations here

    $actual = $this->event->emailOutputTo($addresses, $onlyIfOutputExists);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmailWrittenOutputTo0()
{
    $addresses = m::mock('UntypedParameter_addresses_');

    // TODO: Your mock expectations here

    $actual = $this->event->emailWrittenOutputTo($addresses);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPingBefore0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->event->pingBefore($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThenPing0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->event->thenPing($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunInBackground0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->runInBackground();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser0()
{
    $user = m::mock('UntypedParameter_user_');

    // TODO: Your mock expectations here

    $actual = $this->event->user($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnvironments0()
{
    $environments = m::mock('UntypedParameter_environments_');

    // TODO: Your mock expectations here

    $actual = $this->event->environments($environments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvenInMaintenanceMode0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->evenInMaintenanceMode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithoutOverlapping0()
{
    $expiresAt = m::mock('UntypedParameter_expiresAt_');

    // TODO: Your mock expectations here

    $actual = $this->event->withoutOverlapping($expiresAt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWhen0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->event->when($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkip0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->event->skip($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->event->before($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfter0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->event->after($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThen0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->event->then($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testName0()
{
    $description = m::mock('UntypedParameter_description_');

    // TODO: Your mock expectations here

    $actual = $this->event->name($description);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDescription0()
{
    $description = m::mock('UntypedParameter_description_');

    // TODO: Your mock expectations here

    $actual = $this->event->description($description);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSummaryForDisplay0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($this->description)) == false (line 633)

    $actual = $this->event->getSummaryForDisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSummaryForDisplay1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($this->description)) == true (line 633)

    $actual = $this->event->getSummaryForDisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNextRunDate0()
{
    $currentTime = m::mock('UntypedParameter_currentTime_');
    $nth = m::mock('UntypedParameter_nth_');
    $allowCurrentDate = m::mock('UntypedParameter_allowCurrentDate_');

    // TODO: Your mock expectations here

    $actual = $this->event->nextRunDate($currentTime, $nth, $allowCurrentDate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExpression0()
{
    // TODO: Your mock expectations here

    $actual = $this->event->getExpression();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreventOverlapsUsing0()
{
    $mutex = m::mock(\Illuminate\Console\Scheduling\Mutex::class);

    // TODO: Your mock expectations here

    $actual = $this->event->preventOverlapsUsing($mutex);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
