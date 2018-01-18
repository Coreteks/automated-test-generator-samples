<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\RememberMeFactory;

class RememberMeFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\RememberMeFactory
*/
protected $rememberMeFactory;

public function setUp()
{
    parent::setUp();

    $this->rememberMeFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\RememberMeFactory();
}

public function testCreate0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate9()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate10()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate11()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate12()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate13()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate14()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate15()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate16()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate17()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate18()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate19()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate20()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate21()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate22()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate23()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate24()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate25()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate26()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate27()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate28()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate29()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate30()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate31()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate32()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate33()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate34()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate35()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate36()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate37()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate38()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate39()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate40()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate41()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate42()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate43()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate44()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate45()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate46()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate47()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate48()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate49()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate50()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate51()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate52()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate53()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate54()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate55()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate56()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate57()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate58()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate59()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate60()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate61()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate62()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate63()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate64()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate65()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate66()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate67()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate68()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate69()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate70()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate71()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate72()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate73()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate74()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate75()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate76()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate77()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate78()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate79()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate80()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate81()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate82()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate83()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate84()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate85()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate86()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate87()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate88()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate89()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate90()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate91()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate92()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate93()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate94()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate95()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate96()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate97()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate98()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate99()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == false (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate100()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate101()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate102()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate103()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate104()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate105()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate106()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate107()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate108()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate109()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate110()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate111()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate112()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate113()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate114()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate115()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate116()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate117()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate118()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate119()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate120()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate121()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate122()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate123()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate124()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate125()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate126()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate127()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate128()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate129()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate130()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate131()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate132()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate133()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate134()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate135()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate136()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate137()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate138()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate139()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate140()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate141()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate142()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate143()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate144()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate145()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate146()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate147()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate148()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate149()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == false (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate150()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate151()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate152()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate153()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate154()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate155()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate156()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate157()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate158()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate159()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate160()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate161()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate162()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate163()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate164()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate165()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate166()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate167()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate168()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate169()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate170()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate171()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate172()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate173()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate174()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == false (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate175()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate176()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate177()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate178()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate179()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate180()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate181()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate182()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate183()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate184()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate185()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate186()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate187()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate188()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate189()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate190()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate191()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate192()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == false (line 80)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate193()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == false (line 76)
    // if (!isset($attribute['provider'])) == true (line 80)
    // throw new \RuntimeException('Each "security.remember_me_aware" tag must have a provider attribute.') -> exception (line 81)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate194()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate195()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == false (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate196()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate197()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate198()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == false (line 97)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreate199()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['token_provider'])) == true (line 44)
    // if ($container->hasDefinition('security.logout_listener.' . $id)) == true (line 52)
    // if (isset($config['token_provider'])) == true (line 63)
    // if (!isset($attribute['id']) || $attribute['id'] !== $id) == true (line 76)
    // if ($config['user_providers']) == true (line 91)
    // if (0 === count($userProviders)) == true (line 97)
    // throw new \RuntimeException('You must configure at least one remember-me aware listener (such as form-login) for each firewall that has remember-me enabled.') -> exception (line 98)

    $actual = $this->rememberMeFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPosition0()
{
    // TODO: Your mock expectations here

    $actual = $this->rememberMeFactory->getPosition();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->rememberMeFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->rememberMeFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration1()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_bool($value)) == false (line 142)

    $actual = $this->rememberMeFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration2()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_bool($value)) == true (line 142)

    $actual = $this->rememberMeFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
