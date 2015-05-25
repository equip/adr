<?php

namespace Spark\Adr;

interface DomainInterface
{
    /**
     * Handle domain logic for an action.
     *
     * @parma  array $input
     * @return PayloadInterface
     */
    public function __invoke(array $input);
}
