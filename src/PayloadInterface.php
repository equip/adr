<?php

namespace Equip\Adr;

interface PayloadInterface
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
     * @var string
     */
    const STATUS_OK = 'OK';

    /**
     * @var string
     */
    const STATUS_CREATED = 'Created';

    /**
     * @var string
     */
    const STATUS_ACCEPTED = 'Accepted';

    /**
     * @var string
     */
    const STATUS_NO_CONTENT = 'No Content';

    /**
     * @var string
     */
    const STATUS_MOVED_PERMANENTLY = 'Moved Permanently';

    /**
     * @var string
     */
    const STATUS_FOUND = 'Found';

    /**
     * @var string
     */
    const STATUS_NOT_MODIFIED = 'Not Modified';

    /**
     * @var string
     */
    const STATUS_BAD_REQUEST = 'Bad Request';

    /**
     * @var string
     */
    const STATUS_UNAUTHORIZED = 'Unauthorized';

    /**
     * @var string
     */
    const STATUS_FORBIDDEN = 'Forbidden';

    /**
     * @var string
     */
    const STATUS_NOT_FOUND = 'Not Found';

    /**
     * Create a copy of the payload with the status.
     *
     * @param string $status
     * @return PayloadInterface
     */
    public function withStatus($status);

    /**
     * Get the status of the payload.
     *
     * @return string
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
