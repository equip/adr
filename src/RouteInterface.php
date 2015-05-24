<?php

namespace Spark\Adr;

/**
 * Value object that carries the route to the action.
 */
interface RouteInterface
{

    /**
     * Returns a reference to a class for the domain/application service logic
     * @return mixed
     */
    public function getDomain();

    /**
     * Returns a reference to a class for sending the payload to the server
     * @return mixed
     */
    public function getResponder();

    /**
     * Returns a reference to a class for parsing HTTP input to be sent to the application service (domain)
     * @return mixed
     */
    public function getInput();

}
