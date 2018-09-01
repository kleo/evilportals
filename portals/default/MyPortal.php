<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        // handle form input or other extra things there

        // Call parent to handle basic authorization first
        parent::handleAuthorization();
    }

    /**
     * Override this to do something when the client is successfully authorized.
     * By default it just notifies the Web UI.
     */
    public function onSuccess()
    {
        // Calls default success message
        parent::onSuccess();
    }

    /**
     * If an error occurs then do something here.
     * Override to provide your own functionality.
     */
    public function showError()
    {
        // Calls default error message
        parent::showError();
    }
}
