<?php

namespace Spark\Adr;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class ActionHandler implements ActionInterface
{
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface      $response,
        RouteInterface         $route
    ) {
        $domain    = $route->getDomain();
        $input     = $route->getInput();
        $responder = $route->getResponder();

        $payload  = $this->getPayload($domain, $input, $request);
        $response = $this->getResponse($responder, $request, $response, $payload);

        return $response;
    }

    /**
     * Execute the domain to get a payload.
     *
     * @param  DomainInterface        $domain
     * @param  InputInterface         $input
     * @param  ServerRequestInterface $request
     * @return PayloadInterface
     */
    private function getPayload(
        DomainInterface        $domain,
        InputInterface         $input,
        ServerRequestInterface $request
    ) {
        return $domain($input($request));
    }

    /**
     * Execute the responder to marshall the reponse.
     *
     * @param  ResponderInterface     $responder
     * @param  ServerRequestInterface $request
     * @param  ResponseInterface      $response
     * @param  PayloadInterface       $payload
     * @return ResponseInterface
     */
    private function getResponse(
        ResponderInterface     $responder,
        ServerRequestInterface $request,
        ResponseInterface      $response,
        PayloadInterface       $payload
    ) {
        return $responder($request, $response, $payload);
    }
}
