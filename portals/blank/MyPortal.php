<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        // handle form input or other extra things there

        // Call parent to handle basic authorization first
        parent::handleAuthorization();

    }

    public function showSuccess()
    {
        // Calls default success message
        parent::showSuccess();
    }

    public function showError()
    {
        // Calls default error message
        parent::showError();
    }
}
