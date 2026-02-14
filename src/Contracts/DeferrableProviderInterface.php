<?php

declare(strict_types=1);

namespace CFXP\Contracts;

interface DeferrableProviderInterface
{
    /**
     * @return array<string>
     */
    public function provides(): array;
}
