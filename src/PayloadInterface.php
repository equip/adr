<?php

namespace Spark\Adr;

interface PayloadInterface
{
    /**
     * Create a copy of the payload with the status.
     *
     * @param int $status
     * @return PayloadInterface
     */
    public function withStatus($status);

    /**
     * Get the status of the payload.
     *
     * @return int
     */
    public function getStatus();

    /**
     * Create a copy of the payload with output array.
     *
     * @param array $output
     * @return PayloadInterface
     */
    public function withOutput(array $output);

    /**
     * Get output array from the payload.
     *
     * @return array
     */
    public function getOutput();

    /**
     * Create a copy of the payload with messages array.
     *
     * @param array $output
     * @return PayloadInterface
     */
    public function withMessages(array $messages);

    /**
     * Get messages array from the payload.
     *
     * @return array
     */
    public function getMessages();
}