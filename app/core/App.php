<?php

class App {
    public function __construct()
    {
        echo 'Berhasil Class App :) <br>';
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl() {
        if ( isset($_GET['url']) ) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        } 
    }
}

?>