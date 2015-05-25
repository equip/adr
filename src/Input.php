<?php

namespace Spark\Adr;

use Psr\Http\Message\ServerRequestInterface;

class Input implements InputInterface
{
    public function __invoke(
        ServerRequestInterface $request
    ) {
        $input = [];
        if ($params = $request->getQueryParams()) {
            $input = array_replace($input, $params);
        }
        if ($params = $request->getParsedBody()) {
            $input = array_replace($input, $params);
        }
        if ($params = $request->getUploadedFiles()) {
            $input = array_replace($input, $params);
        }
        if ($params = $request->getCookieParams()) {
            $input = array_replace($input, $params);
        }
        if ($params = $request->getAttributes()) {
            $input = array_replace($input, $params);
        }

        return $input;
    }
}
