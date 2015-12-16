<?php

namespace Spark\Adr;

interface PayloadInterface
{
    /**
     * @var integer All good.
     */
    const OK = 10;

    /**
     * @var integer Error during domain processing.
     */
    const ERROR = 20;

    /**
     * @var integer Invalid domain input.
     */
    const INVALID = 30;

    /**
     * @var integer Unknown domain state.
     */
    const UNKNOWN = 40;

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
     * Create a copy of the payload with input array.
     *
     * @param array $input
     * @return PayloadInterface
     */
    public function withInput(array $input);

    /**
     * Get input array from the payload.
     *
     * @return array
     */
    public function getInput();

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
