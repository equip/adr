<?php

namespace Spark\Adr;

interface RouteInterface
{
    /**
     * @param $domain string|DomainInterface
     */
    public function setDomain($domain);

    /**
     * @param $input string|InputInterface
     */
    public function setInput($input);

    /**
     * @param $responder string|ResponderInterface
     */
    public function setResponder($responder);

    /**
     * @return string|DomainInterface
     */
    public function getDomain();

    /**
     * @return string|InputInterface
     */
    public function getInput();

    /**
     * @return string|ResponderInterface
     */
    public function getResponder();
}
