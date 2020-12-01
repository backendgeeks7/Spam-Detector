<?php

namespace App\SpamDetector;


use Illuminate\Http\Request;

class SpamDetectorManager
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @var array
     */
    private $config;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->config  = config('spam');
    }

    /**
     * Detect if we've spam here.
     */
    public function detect()
    {
        if ($this->isDisabled()) {
            return false;
        }

        // The Filed is provided in our form, in case we not having it in our Request [ that meaning something is wrong ].
        if (! $this->request->has($this->config['filed_name'])) {
            return true;
        }

        // Also, if this filed having a value while it's not visible anymore for the users [ that meaning something is wrong ].
        if (! empty($this->request->get($this->config['filed_name']))) {
            return true;
        }

        // The Form Submitted Too Quickly [Something weird here ^-^].
        if ($this->timeElapsedToSubmitForm() <= $this->config['minimum_time']) {
            return true;
        }

        return false;
    }

    /**
     * @return float|string
     */
    private function timeElapsedToSubmitForm()
    {
        return microtime(true) - floatval($this->request->get($this->config['time_filed_name']));
    }

    /**
     * Check if the Spam Detector Enabled.
     *
     * @return bool
     */
    private function isEnabled()
    {
        return $this->config['enabled'];
    }

    /**
     * Check if the Spam Detector Enabled.
     *
     * @return bool
     */
    private function isDisabled()
    {
        return ! $this->isEnabled();
    }
}
