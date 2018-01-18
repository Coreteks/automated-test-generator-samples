<?php

namespace tests;

use Mockery as m;
use Plural_Forms;

class Plural_FormsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_str = null;
/**
* @var \Plural_Forms
*/
protected $plural_Forms;

public function setUp()
{
    parent::setUp();

    $this->_str = null;
    $this->plural_Forms = new \Plural_Forms($this->_str);
}

public function testGet0()
{
    $num = m::mock('UntypedParameter_num_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->cache[$num])) == false (line 240)

    $actual = $this->plural_Forms->get($num);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $num = m::mock('UntypedParameter_num_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->cache[$num])) == true (line 240)

    $actual = $this->plural_Forms->get($num);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute1()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute2()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == false (line 313)
    // Case '==' == false (line 319)
    // Case '?:' == false (line 325)
    // Default (line 332)
    // throw new \Exception(\sprintf('Unknown operator "%s"', $next[1])) -> exception (line 333)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute3()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == false (line 313)
    // Case '==' == false (line 319)
    // Case '?:' == true (line 325)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute4()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == false (line 313)
    // Case '==' == false (line 319)
    // Case '?:' == true (line 325)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute5()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == false (line 313)
    // Case '==' == true (line 319)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute6()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == false (line 313)
    // Case '==' == true (line 319)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute7()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == true (line 313)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute8()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == false (line 307)
    // Case '!=' == true (line 313)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute9()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == true (line 307)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute10()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == false (line 301)
    // Case '>=' == true (line 307)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute11()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == true (line 301)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute12()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == false (line 295)
    // Case '>' == true (line 301)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute13()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == true (line 295)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute14()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == false (line 289)
    // Case '<=' == true (line 295)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute15()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == true (line 289)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute16()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == false (line 283)
    // Case '<' == true (line 289)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute17()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == true (line 283)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute18()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == false (line 277)
    // Case '&&' == true (line 283)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute19()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == true (line 277)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute20()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == false (line 271)
    // Case '||' == true (line 277)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute21()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == true (line 271)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute22()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == false (line 264)
    // switch ($next[1]) (line 270)
    // Case '%' == true (line 271)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute23()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == true (line 264)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute24()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == false (line 261)
    // if ($next[0] === 'value') == true (line 264)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute25()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == true (line 261)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == false (line 337)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testExecute26()
{
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($i < $total) == true (line 258)
    // if ($next[0] === 'var') == true (line 261)
    // while ($i < $total) == false (line 258)
    // if (\count($stack) !== 1) == true (line 337)
    // throw new \Exception('Too many values remaining on the stack') -> exception (line 338)

    $actual = $this->plural_Forms->execute($n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
