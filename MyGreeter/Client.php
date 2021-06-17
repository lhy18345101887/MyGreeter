<?php
namespace MyGreeter;

date_default_timezone_set("Asia/Shanghai");

/**
 * Class Client
 */
class Client {

    public $currentTime;

    /**
     * client constructor.
     */
    public function __construct()
    {
        $this->currentTime = date("H");
    }

    /**
     * check time and echo greeting.
     */
    public function getGreeting()
    {
        if (!$this->currentTime) {
            return false;
        }
        if ($this->currentTime > 0 && $this->currentTime < 12) {
            echo "Good morning";
        } else if ($this->currentTime > 12 && $this->currentTime < 18) {
            echo "Good afternoon";
        } else if ($this->currentTime > 18 && $this->currentTime < 24) {
            echo "Good evening";
        }
    }

}

$Client = new Client();
print_r($Client->getGreeting());