<?php

namespace Spark\Adr;

interface DomainInterface
{
    /**
     * Handle domain logic for an action.
     *
     * @param  InputInterface $input
     * @return PayloadInterface
     */
    public function __invoke(
        InputInterface $input
    );
}
