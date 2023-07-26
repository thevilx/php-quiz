<?php

class MyWebsite{

   private $html;

    public function __construct($html)
    {
        $this->html = $html;
    }

    public function showHTML() {
        if ($this->isProxyUsed()){
            return "404";
        }

        return $this->html;
    }


    private function isProxyUsed() {
        return !empty($_SERVER['HTTP_X_FORWARDED_FOR']) || !empty($_SERVER['HTTP_CLIENT_IP']);
    }

}


$web = new MyWebsite("Hello World!");
echo $web->showHTML();