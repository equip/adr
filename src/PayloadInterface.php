<?php

namespace Equip\Adr;

interface PayloadInterface extends Status
{
    /**
     * @var integer All good.
     * @deprecated 1.1.0
     * @see \Equip\Adr\PayloadInterface::STATUS_OK
     */
    const OK = 10;

    /**
     * @var integer Error during domain processing.
     * @deprecated 1.1.0
     */
    const ERROR = 20;

    /**
     * @var integer Invalid domain input.
     * @deprecated 1.1.0
     */
    const INVALID = 30;

    /**
     * @var integer Unknown domain state.
     * @deprecated 1.1.0
     */
    const UNKNOWN = 40;

    /**
     * Create a copy of the payload with the status.
     *
     * @see \Equip\Adr\Status
     *
     * @param string $status
     *
     * @return PayloadInterface
     */
    public function withStatus($status);

    /**
     * Get the status of the payload.
     *
     * @see \Equip\Adr\Status
     *
     * @return string
     */
    public function getStatus();

    /**
     * Create a copy of the payload with input array.
     *
     * @param array $input
     *
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
     *
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
     *
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
