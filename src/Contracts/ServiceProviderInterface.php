<?php

declare(strict_types=1);

namespace CFXP\Contracts;

use CFXP\Core\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

interface ServiceProviderInterface
{
    public function register(ContainerInterface $container): void;

    public function boot(ContainerInterface $container, ?EventDispatcherInterface $dispatcher = null): void;
}
