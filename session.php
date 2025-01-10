<?php 
class Session {
    public function __construct() {
        // Start session if not already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function setSession($key, $value): void {
        $_SESSION[$key] = $value;
    }

    public function getSession($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    public function unsetSession($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public function destroySession() {
        session_destroy();
    }
}

// // Include the SessionManager class
// require 'SessionManager.php';

// // Create a new instance of SessionManager
// $sessionManager = new SessionManager();

// // Set a session variable
// $sessionManager->setSession('user_id', 123);

// // Get a session variable
// $user_id = $sessionManager->getSession('user_id');

// // Unset a session variable
// $sessionManager->unsetSession('user_id');

// // Destroy all session variables
// $sessionManager->destroySession();
?>