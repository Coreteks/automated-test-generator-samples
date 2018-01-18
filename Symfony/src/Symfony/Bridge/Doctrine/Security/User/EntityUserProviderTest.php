<?php

namespace tests\Symfony\Bridge\Doctrine\Security\User;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\Security\User\EntityUserProvider;

class EntityUserProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var mixed
*/
protected $_classOrAlias = null;
/**
* @var mixed
*/
protected $_property = null;
/**
* @var mixed
*/
protected $_managerName = null;
/**
* @var \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
*/
protected $entityUserProvider;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->_classOrAlias = null;
    $this->_property = null;
    $this->_managerName = null;
    $this->entityUserProvider = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->_registry, $this->_classOrAlias, $this->_property, $this->_managerName);
}

public function testLoadUserByUsername0()
{
    $username = m::mock('UntypedParameter_username_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->property) == false (line 50)
    // if (!$repository instanceof \Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface) == false (line 53)
    // if (null === $user) == false (line 60)

    $actual = $this->entityUserProvider->loadUserByUsername($username);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
 */
public function testLoadUserByUsername1()
{
    $username = m::mock('UntypedParameter_username_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->property) == false (line 50)
    // if (!$repository instanceof \Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface) == false (line 53)
    // if (null === $user) == true (line 60)
    // throw new \Symfony\Component\Security\Core\Exception\UsernameNotFoundException(sprintf('User "%s" not found.', $username)) -> exception (line 61)

    $actual = $this->entityUserProvider->loadUserByUsername($username);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testLoadUserByUsername2()
{
    $username = m::mock('UntypedParameter_username_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->property) == false (line 50)
    // if (!$repository instanceof \Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface) == true (line 53)
    // throw new \InvalidArgumentException(sprintf('You must either make the "%s" entity Doctrine Repository ("%s") implement "Symfony\\Bridge\\Doctrine\\Security\\User\\UserLoaderInterface" or set the "property" option in the corresponding entity provider configuration.', $this->classOrAlias, get_class($repository))) -> exception (line 54)

    $actual = $this->entityUserProvider->loadUserByUsername($username);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadUserByUsername3()
{
    $username = m::mock('UntypedParameter_username_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->property) == true (line 50)
    // if (null === $user) == false (line 60)

    $actual = $this->entityUserProvider->loadUserByUsername($username);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
 */
public function testLoadUserByUsername4()
{
    $username = m::mock('UntypedParameter_username_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $this->property) == true (line 50)
    // if (null === $user) == true (line 60)
    // throw new \Symfony\Component\Security\Core\Exception\UsernameNotFoundException(sprintf('User "%s" not found.', $username)) -> exception (line 61)

    $actual = $this->entityUserProvider->loadUserByUsername($username);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshUser0()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof $class) == false (line 73)
    // if ($repository instanceof \Symfony\Component\Security\Core\User\UserProviderInterface) == false (line 78)
    // if (!($id = $this->getClassMetadata()->getIdentifierValues($user))) == false (line 85)
    // if (null === $refreshedUser) == false (line 94)

    $actual = $this->entityUserProvider->refreshUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
 */
public function testRefreshUser1()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof $class) == false (line 73)
    // if ($repository instanceof \Symfony\Component\Security\Core\User\UserProviderInterface) == false (line 78)
    // if (!($id = $this->getClassMetadata()->getIdentifierValues($user))) == false (line 85)
    // if (null === $refreshedUser) == true (line 94)
    // throw new \Symfony\Component\Security\Core\Exception\UsernameNotFoundException(sprintf('User with id %s not found', json_encode($id))) -> exception (line 95)

    $actual = $this->entityUserProvider->refreshUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRefreshUser2()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof $class) == false (line 73)
    // if ($repository instanceof \Symfony\Component\Security\Core\User\UserProviderInterface) == false (line 78)
    // if (!($id = $this->getClassMetadata()->getIdentifierValues($user))) == true (line 85)
    // throw new \InvalidArgumentException('You cannot refresh a user ' . 'from the EntityUserProvider that does not contain an identifier. ' . 'The user object has to be serialized with its own identifier ' . 'mapped by Doctrine.') -> exception (line 86)

    $actual = $this->entityUserProvider->refreshUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRefreshUser3()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof $class) == false (line 73)
    // if ($repository instanceof \Symfony\Component\Security\Core\User\UserProviderInterface) == true (line 78)

    $actual = $this->entityUserProvider->refreshUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Security\Core\Exception\UnsupportedUserException
 */
public function testRefreshUser4()
{
    $user = m::mock(\Symfony\Component\Security\Core\User\UserInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$user instanceof $class) == true (line 73)
    // throw new \Symfony\Component\Security\Core\Exception\UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user))) -> exception (line 74)

    $actual = $this->entityUserProvider->refreshUser($user);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSupportsClass0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->entityUserProvider->supportsClass($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
