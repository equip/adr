<?php

namespace Spark\Adr;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ActionInterface
{
    /**
     * Handle the boundary between HTTP and the domain.
     *
     * A domain and responder are discovered from the route. Input is created
     * from the request. The domain is executed with the input and produces
     * a payload. The payload is marshalled into the response using the responder.
     *
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     * @param  RouteInterface         $route
     * @return ResponseInterface
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface      $response,
        RouteInterface         $route
    );
}
