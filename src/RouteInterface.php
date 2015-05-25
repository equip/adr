<?php

namespace Spark\Adr;

interface RouteInterface
{
    /**
     * @return DomainInterface
     */
    public function getDomain();

    /**
     * @return InputInterface
     */
    public function getInput();

    /**
     * @return ResponderInterface
     */
    public function getResponder();
}
