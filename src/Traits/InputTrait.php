<?php

namespace Spark\Adr\Traits;

use Psr\Http\Message\ServerRequestInterface;

trait InputTrait
{
    // implements InputInterface
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
        return $this->assertValid($input);
    }

    /**
     * Assert that the current input is valid.
     *
     * Use this method to apply any domain-specific rules.
     *
     * @param  array $input
     * @return void
     * @throws \Exception
     */
    private function assertValid(array $input)
    {
        // noop
    }
}
