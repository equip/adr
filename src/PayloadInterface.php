<?php

namespace Equip\Adr;

interface PayloadInterface extends Status
{
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

    /**
     * Create a copy of the payload with a modified setting.
     *
     * @param string $name
     * @param mixed $value
     *
     * @return PayloadInterface
     */
    public function withSetting($name, $value);

    /**
     * Create a copy of the payload without a setting.
     *
     * @param string $name
     *
     * @return PayloadInterface
     */
    public function withoutSetting($name);

    /**
     * Get a payload setting.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getSetting($name);

    /**
     * Get all payload settings.
     *
     * @return array
     */
    public function getSettings();
}
