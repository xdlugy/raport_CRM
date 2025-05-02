<?php

class Session {
    public function __construct() {
        session_start();
        if(!isset($_SESSION['csrf_token'])) {
            $this->set('csrf_token', bin2hex(random_bytes(16)));
        }
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function destroy() {
        session_destroy();
    }
}